<span id="top">![/assets/logo1.png](/assets/logo1.png)</span>
## <span id="flatfile">FlatFile (.yml)</span>
You can store statistics in a flatfile if you don't have a database or just don't want to use one. FlatFile is the default storage method.
When using FlatFile a <code>stats.yml</code> file will be created and maintained automatically.
FlatFile is the simplest of all storage methods in place currently, however it provides the least accessibility from an external source (for example a website).
####**DO NOT EDIT THIS FILE WHILE THE SERVER IS RUNNING! IF YOU DO IT MAY CAUSE DATA LOSS**

Depending on your [config options](/config#options.instant-update), the file will either be edited whenever a statistic changes or whenever the user logs out. It is recommended to leave the <code>instant-update</code> option set to false.

<hr>
## <span id="mysql">MySQL</span>
You can also store statistics in a MySQL database, however it requires a little more configuration.

**Requirements**
- MySQL Database
- At least CREATE, ALTER, DROP, INSERT, UPDATE and SELECT permissions.

All statistics will be stored in the table you pre-define in the [config](/config). If you would like to use the plugin across multiple servers you can do so. If you want to have separate stats for each server just rename the table that each server uses to be unique, if you want stats to be the same across all servers just set the table name to something consistent.

<hr>
## <span id="mongo">Mongo</span>
####Note: This storage method has not been fully implemented in the current release!
You can also store statistics in a Mongo database. Haven't heard of Mongo before? It is a high performance document oriented database, this storage method is **suggested for advanced users only!**

**Requirements**
- Mongo Database
- At least Read/Write permissions.

All statistics will be stored in the table/collection you pre-define in the [config](/config). If you would like to use the plugin across multiple servers you can do so. If you want to have separate stats for each server just rename the table that each server uses to be unique, if you want stats to be the same across all servers just set the table name to something consistent.

An example document would be the following:
```json
{
    "uuid" : "a8889e3068b84ce8963f4ea259c3ebe3",
    "playerKills" : 0,
    "entityKills" : 0,
    "deaths" : 0,
    "projectiles" : 0,
    "streaks" : 0,
    "blocksBroken" : 0,
    "blocksPlaced" : 0,
    "itemsCrafted" : 0,
    "firstJoin" : NumberLong(1429375603),
    "playtime" : NumberLong(0)
}
```

<hr>
## Others
If you want to make your own storage method you need to extend the <code>StorageHandler</code> class.