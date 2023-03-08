#!/bin/bash

backup_dir_pattern="recipes_bak*"
current_date=`date +"%Y-%m-%d-%T"`
backup_dir_path="./backup/"
backup_destination_path="$backup_dir_path""recipes_bak_${current_date}"

echo "Backup folder: $backup_destination_path"
cp -r recipes $backup_destination_path

# get the number of directories with naming pattern recipes_bak*
dir_count=$(find $backup_dir_path -maxdepth 1 -type d -name "$backup_dir_pattern" | wc -l)

# check if the number of directories is greater than 3
if [[ $dir_count -gt 3 ]]; then
  # get the name of the oldest directory (sorted by modification time)
  oldest_dir=$(find $backup_dir_path -maxdepth 1 -type d -name "$backup_dir_pattern" -printf '%T@ %p\n' | sort -n | head -1 | cut -f2- -d" ")

  # delete the oldest directory
  rm -rf "$oldest_dir"
  echo "Deleted directory: $oldest_dir"
else
  echo "Number of backup directories are not greater than 3."
fi
exit;

echo "Pull latest changes"
cd recipes
git pull origin main

echo "Run Composer install"
/usr/bin/php81 /usr/local/bin/composer install  --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

echo "Run Laravel update commands"
/bin/php81 artisan migrate
/bin/php81 artisan cache:clear


