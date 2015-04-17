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

#### Storage Methods
There are (as of now) three (3) storage methods:
- FlatFile
- MySQL
- Mongo

To read about these please [click here](/storage).

#### About each setting:
<table class="table table-bordered table-striped">
    <tr style="font-weight:bold;text-align:center">
        <td>Setting</td>
        <td>Description</td>
        <td>Default Value</td>
    </tr>

    <tr id="options.instant-update">
        <td><code>options.instant-update</code></td>
        <td>If stats should save to storage immediately or when the user logs out.</td>
        <td>false</td>
    </tr>
    <tr id="options.debug">
        <td><code>options.debug</code></td>
        <td>If you want to see full stack traces when an error occurs (helpful for debugging).</td>
        <td>false</td>
    </tr>
    
    <tr id="options.log.deaths">
        <td><code>options.log.deaths</code></td>
        <td>If a death counter should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.playerKills">
        <td><code>options.log.playerKills</code></td>
        <td>If a player kill counter should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.entityKills">
        <td><code>options.log.entityKills</code></td>
        <td>If a entity kill counter should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.projectiles">
        <td><code>options.log.projectiles</code></td>
        <td>If a projectiles launched counter should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.streaks">
        <td><code>options.log.streaks</code></td>
        <td>If highest player killstreaks should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.blocksBroken">
        <td><code>options.log.blocksBroken</code></td>
        <td>If a block broken counter should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.blocksPlaced">
        <td><code>options.log.blocksPlaced</code></td>
        <td>If a block placed counter should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.itemsCrafted">
        <td><code>options.log.itemsCrafted</code></td>
        <td>If the amount of items crafted should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="options.log.playTime">
        <td><code>options.log.playTime</code></td>
        <td>If the amount of time played should be logged.</td>
        <td>true</td>
    </tr>
    
    <tr id="storage.type">
        <td><code>storage.type</code></td>
        <td>What <a href="/storage">type of storage</a> should be used.</td>
        <td>true</td>
    </tr>
</table>

### <span id="lang">Language config</span>
**This feature has not been implemented yet.**

It is planned to allow messages within the plugin to be changed, once some of the [commands](/commands) have been added, this will be completed (as there is no need for it yet)