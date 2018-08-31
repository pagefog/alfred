# alfog - Alfred 3 Workflow for Pagefog
[![MIT licensed](https://img.shields.io/badge/license-MIT-blue.svg)](./LICENSE)

Quickly interact with your Pagefog servers & sites.

Latest stable version is tagged with a release and uploaded to [Packal.org](http://www.packal.org/workflow/alfog).

## Setup

1. Run `pf key ` and paste your API key in.
2. You should get a notification that the key was saved.
3. Run `pf open ` and start searching for your sites or servers.

## Available Keywords
- `pf key {key}` : Sets your Forge API Key
- `pf open {site or server}` : Opens the specified server or site's Forge page in your browser
- `pf deploy {site}` : Deploys the site specified (must confirm)
- `pf env {site}` : Copies the env file of the site specified to your clipboard
- `pf ip {server}` : Copies the ip address of the specified server to your clipboard
- `pf reboot {server}` : Reboots the specified server (must confirm)
- `pf mysql {server}` : Restarts MySQL on the specified server (must confirm)
- `pf postgres {server}` : Restarts Postgres on the specified server (must confirm)
- `pf nginx {server}` : Restarts Nginx on the specified server (must confirm)
- `pf term {server}` : Opens SSH connection in Terminal to the specified server
- `pf iterm {server}` : Opens SSH connection in iTerm to the specified server
- `pf reload` : Fetches new data from Forge API
- `pf clear` : Deletes your API Key and Forge Data
