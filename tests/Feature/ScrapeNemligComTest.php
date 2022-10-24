<?php

namespace Tests\Feature;

use App\Http\Services\UserHashService;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Mockery\MockInterface;
use Tests\TestCase;
use \Illuminate\Http\Client\Response;

class ScrapeNemligComTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->mockHttpRequest();
        $this->userId = 1;
        $this->userIdHash = UserHashService::getUserHashById($this->userId);
    }

    public function testScrape()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.nemlig.com/opskrifter/some-recipe',
            'userIdHash' => $this->userIdHash,
            'userId' => $this->userId,
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('recipes', [
            'title' => 'Header mock',
            'number' => 4,
            'active' => 0,
        ]);

        $this->assertDatabaseCount('ingredients', 9);
        $this->assertDatabaseHas('ingredients', [
            'name' => 'Basilikum',
            'amount' => '1',
            'type' => 'håndfuld',
            'order' => 1,
        ]);
    }

    public function testAlreadyScraped()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.nemlig.com/opskrifter/some-recipe',
            'userIdHash' => $this->userIdHash,
            'userId' => $this->userId,
        ]);

        $response = $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.nemlig.com/opskrifter/some-recipe',
            'userIdHash' => $this->userIdHash,
            'userId' => $this->userId,
        ]);

        $response->assertStatus(400);
    }

    public function testIncorrectScraper()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post('/api/v1/scrape', [
            'url' => 'https://www.something-incorrect.com/recipe_1',
            'userIdHash' => $this->userIdHash,
            'userId' => $this->userId,
        ]);

        $response->assertStatus(501);
    }

    private function mockHttpRequest(): void
    {
        $mockHtml = 'some html
                    "content":[{"TemplateName":"recipedetailspot","MetaTitle":"Meta title mock","MetaDescription":"MetaDescription mock","RecipeId":"Recipe ID mock","Header":"Header mock","Instructions":"<ul>\n    <li>\n    <p>Line 1</p>\n    </li>\n    <li>\n    <p>Line 2</p>\n    </li>\n    <li>\n    <p>Line 3</p>\n    </li>\n    </ul>","WorkTime":"5-15 min","TotalTime":"15 min","Author":{"Name":"nemlig.com","Link":{"Anchor":"","Class":"","Text":"","Query":"","Title":"","Url":"https://www.nemlig.com/","Target":"","TargetId":"00000000-0000-0000-0000-000000000000","LinkType":"external"},"LogoForJson":{"AltText":"nemlig.com","MediaType":"image","Url":"/scommerce/images/100x27_nemlig_logo_skaleret.jpg?i=%7B59512063-A6D5-42B7-B6D2-F08EAC62FA83%7D&v=gCfznZxD"},"ShowLogo":true},"Media":[{"AltText":"Melonsalat, opskrift","MediaType":"image","Url":"https://live.nemligstatic.com/scommerce/images/Melonsalat_opskrift_98001341_nemlig.jpg?i=%7B58381A71-72EB-4192-90F6-D7C308ABC74C%7D&v=gDdvR6s7"}],"NumberOfPersons":4,"AllowedForNumberOfPersons":[1,2,3,4,5,6,7,8,9,10,12,14,15,16,18,20,22,24,30,36],"IngredientGroups":[{"GroupId":1,"Name":"Melonsalat","Ingredients":[{"ProductSelectionId":"c7ab2834-6061-442e-b298-499974bf5c2f","Text":"Melon fX. cantaloupe, honning eller galia","Amount":"1","Unit":"stk.","GroupId":1,"MesaureWeightInKg":"0.0000","MesaureWeightInGram":null,"MeasureMassInLiter":null,"MeasurePieces":"1","Id":1,"CombinedId":"4c59e1dc-6f48-4e03-87bd-bef7955f18cb"},{"ProductSelectionId":"dd29c1d1-40da-498e-8da5-ad321568174c","Text":"Basilikum","Amount":"1","Unit":"håndfuld","GroupId":1,"MesaureWeightInKg":"0.0100","MesaureWeightInGram":"10","MeasureMassInLiter":null,"MeasurePieces":"0.2","Id":2,"CombinedId":"58904055-74d8-433a-b547-3d746b3c730b"},{"ProductSelectionId":"4289ecb8-20d2-45f9-8125-f6899d49013c","Text":"Valnødder","Amount":"50","Unit":"g (cirka)","GroupId":1,"MesaureWeightInKg":"0.0500","MesaureWeightInGram":"50","MeasureMassInLiter":null,"MeasurePieces":null,"Id":3,"CombinedId":"0af92148-f9ce-4be8-982e-c755f7f09b8e"},{"ProductSelectionId":"f7206707-1df8-48cd-be55-10096584ca7c","Text":"Minimozzarella","Amount":"150","Unit":"g","GroupId":1,"MesaureWeightInKg":"0.1490","MesaureWeightInGram":"149","MeasureMassInLiter":null,"MeasurePieces":null,"Id":4,"CombinedId":"c9c6726e-7097-4f97-a11c-650a11226be6"}]},{"GroupId":2,"Name":"Dressing","Ingredients":[{"ProductSelectionId":"cae19b00-80e2-4310-b9e6-8ec3e240207f","Text":"Olie","Amount":"2","Unit":"spsk.","GroupId":2,"MesaureWeightInKg":"0.0280","MesaureWeightInGram":"28","MeasureMassInLiter":null,"MeasurePieces":null,"Id":1,"CombinedId":"be869122-a47a-4815-8c5b-020f7e4e5a31"},{"ProductSelectionId":"d8dc9af0-37de-4980-9637-994fa63e469f","Text":"Balsamico","Amount":"1","Unit":"spsk.","GroupId":2,"MesaureWeightInKg":"0.0000","MesaureWeightInGram":null,"MeasureMassInLiter":"0.015","MeasurePieces":null,"Id":2,"CombinedId":"daa0fc44-ccf8-4f22-aa90-8b64544b8577"},{"ProductSelectionId":"ae22e751-1fdf-4cb9-8440-6fc40acbe769","Text":"Vand","Amount":"1","Unit":"spsk.","GroupId":2,"MesaureWeightInKg":"0.0000","MesaureWeightInGram":null,"MeasureMassInLiter":"0.015","MeasurePieces":null,"Id":3,"CombinedId":"6e7d0755-03ab-4938-90b9-643f6be98926"},{"ProductSelectionId":"bbce63b0-4c83-4c1d-bc86-ab947c8449cd","Text":"Honning","Amount":"1","Unit":"tsk.","GroupId":2,"MesaureWeightInKg":"0.0070","MesaureWeightInGram":"7","MeasureMassInLiter":null,"MeasurePieces":null,"Id":4,"CombinedId":"35b724f1-4f48-4659-b68b-3a59c5a92525"},{"ProductSelectionId":"54783279-8486-4192-b2b0-067faae186c9","Text":"Salt ","Amount":"1","Unit":"drys","GroupId":2,"MesaureWeightInKg":"0.0005","MesaureWeightInGram":"0.5","MeasureMassInLiter":null,"MeasurePieces":null,"Id":5,"CombinedId":"e52f9fa6-2122-45fa-b715-76b438970475"}]}],"IsLockedForNumberOfPersons":false,"RecipeTags":[{"Name":"Diæt","IconClass":"Diæt"},{"Name":"Weekend","IconClass":"Weekend"},{"Name":"Vegetarisk","IconClass":""},{"Name":"Hverdag","IconClass":"Hverdag"},{"Name":"Fest","IconClass":"Fest"},{"Name":"Sommer","IconClass":"Sommer"},{"Name":"Forret","IconClass":"Forret"},{"Name":"Frokost","IconClass":"Frokost"},{"Name":"Salat","IconClass":"Salat"},{"Name":"Tilbehør","IconClass":"Tilbehør"}],"SortingList":[{"Title":"Anbefalet","UrlName":"default","IsSelected":true},{"Title":"Mest øko","UrlName":"organic","IsSelected":false},{"Title":"Billigst","UrlName":"priceasc","IsSelected":false}],"Recommendations":{"ProductsRecommendations":[],"RecipeRecommendations":[]},"IsBundle":false,"BundleHeading":""}],' . "\r\n
                    more html";

        $responseMock = $this->mock(Response::class, function (MockInterface $mock) use ($mockHtml) {
            $mock->shouldReceive('body')->andReturn($mockHtml);
        });
        Http::shouldReceive('get')->andReturn($responseMock);
    }
}
