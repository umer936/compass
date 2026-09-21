# Compass

Compass is the archived legacy community site that used to live under the main site’s `compass/` folder.

## When was it made?

The extracted git history for this directory first appears in the archive on **2023-06-08**. That is the earliest date I can prove from the repository history here, so it marks when this code was archived into the main repo — not necessarily when the site was originally written.

The codebase itself looks much older: bundled libraries and page assets are from the **2009–2011** era, and several UI/mobile pieces reflect an early-2010s PHP site.

## Layout

- `markitup/` is kept as a nested submodule pointing at the original markItUp repository.
- `mysql_credentials.php` is provided as a safe, environment-based config file so no secrets need to live in git.

## Environment variables

Set these where Compass runs:

- `COMPASS_MYSQL_HOST`
- `COMPASS_MYSQL_DATABASE`
- `COMPASS_MYSQL_USER`
- `COMPASS_MYSQL_PASSWORD`
- `COMPASS_PASSWORD_SALT`
- `COMPASS_AUTH_ENCRYPT_KEY`
- `COMPASS_ONLINE_MYSQL_HOST`
- `COMPASS_ONLINE_MYSQL_DATABASE`
- `COMPASS_ONLINE_MYSQL_USER`
- `COMPASS_ONLINE_MYSQL_PASSWORD`
- `COMPASS_MOBILE_MYSQL_HOST`
- `COMPASS_MOBILE_MYSQL_DATABASE`
- `COMPASS_MOBILE_MYSQL_USER`
- `COMPASS_MOBILE_MYSQL_PASSWORD`

## Notes

This repository is a history-preserving archive of the Compass directory, cleaned so credentials are not committed.
