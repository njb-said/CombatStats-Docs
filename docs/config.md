<span id="top">![/assets/logo1.png](/assets/logo1.png)</span>
### <span id="config">Default config.yml</span>
Below is the default <code>config.yml</code> with comments at the end of lines to explain what each setting does
```yml
options:
  instant-update: false# if stats should be updated immediately in the storage or when the player logs out
  debug: false #debug mode shows full error stack traces not just short versions
  log:# enable/disable stats
    deaths: true #log player death count
    playerKills: true #log player kills count
    entityKills: true #log entity kills count
    projectiles: true #log projectiles fired count
    streaks: true #log highest killstreaks
    blocksBroken: true #log broken blocks count
    blocksPlaced: true #log placed blocks count
    itemsCrafted: true #log items crafted count
    playTime: true #log the amount of time played
storage:
  type: flatfile #where to store stats. choices are flatfile, mysql and mongo
```
All stats are logged on a per-player basis, for example Notch could have 10 kills whereas Dinnerbone could have 2,000.

### Storage Methods
There are (as of now) three (3) storage methods:
- FlatFile
- MySQL
- Mongo

To read about these please [click here](/storage).

### <span id="lang">Language config</span>
**This feature has not been implemented yet.**

It is planned to allow messages within the plugin to be changed, once some of the [commands](/commands) have been added, this will be completed (as there is no need for it yet)