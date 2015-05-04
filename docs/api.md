## API: Overview
CombatStats includes a powerful API providing access to some of the plugins core functions and allowing you to do almost anything on top of it's framework.

### Table of Contents
1. CombatAPI Methods
 * [Accessing](#api-access)
 * [getData](#api-getdata)
 * [Get](#api-get)
 * [Set](#api-set)
 * [Increment](#api-increment)
1. [StorageHandler](#storage)
1. Events
 * [KillstreakDestroyEvent](#events-ksdestory)
 * [KillstreakIncreaseEvent](#events-ksincrease)
 * [KillstreakRecordEvent](#events-ksrecord)
<hr>

## <span id="api-access">CombatAPI: Accessing
You can access the CombatAPI like so:
```java
CombatStats.getAPI()
```
This will return an instance of the CombatAPI class. You can also access the storage handler by doing:
```java
CombatStats.getInstance().getHandler()
```

## CombatAPI: forceFetch/forceSave
The ```forceFetch``` and ```forceSave``` variables in the API methods determine if the value will be set/get in cache or directly interact with the storage method. If this value is not given, the default value is used as defined in the [config](/config#options.instant-update).

## <span id="api-getdata">CombatAPI: getData
You can get a HashMap of all statistic data about a player like so:
```java
getData(UUID uuid)
```
This will return a hashmap where the key is the name of the statistic and the value is an object.

## <span id="api-get">CombatAPI: Get</span>
There a several methods to get different types of values from the storage, however they all fallback to this:
```java
getValue(UUID uuid, String key, Object defaultValue, boolean forceFetch)
```
Example usage:
```java
CombatAPI api = CombatStats.getAPI();
System.out.println(api.getValue(uuid, "projectiles", 0, false));
```
This would print the value of the ```projectiles``` field, if it doesn't exist in the stats for the given UUID then 0 would be returned. The method itself returns an Object

There are methods dedicated to getting specific types, for example:
```java
getIntValue(UUID uuid, String key, int defaultValue) // returns an int
```
```java
getStringValue(UUID uuid, String key, String defaultValue) // returns a String
```
```java
getDoubleValue(UUID uuid, String key, double defaultValue) // returns a double
```
The forceFetch variable is not given here so the default defined in the [config](/config#options.instant-update) will be used. You can also specify a value yourself by adding the argument.

## <span id="api-set">CombatAPI: Set</span>
There a several methods to set different types of values, however they all fallback to this:
```java
setValue(UUID uuid, String key, Object value, boolean forceSave)
```

Example usage:
```java
CombatAPI api = CombatStats.getAPI();
api.setValue(uuid, "deaths", 0, false);
```
This would set the field ```deaths``` to 0 for the given UUID. 

There are methods dedicated to setting specific types, for example:
```java
setInteger(UUID uuid, String key, int value) // returns an int
```
```java
setString(UUID uuid, String key, String value) // returns a String
```
```java
setDouble(UUID uuid, String key, double value) // returns a double
```
The forceSave variable is not given here so the default defined in the [config](/config#options.instant-update) will be used. You can also specify a value yourself by adding the argument.