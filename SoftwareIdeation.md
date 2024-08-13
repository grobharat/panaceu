## Automated Software will be created  based on the models.
- Step 1: Be ready with infrastructure softwares installation
- Step 2: Run Install script (This should create all the neccessary software)
### Install script should be broken into multiple scripts
#### Model Creation
- 1- Using Chat GPT be ready with comprehensive model creation
Prompt: 
Provide bash script for creating model,
It should expect name of model as argument flag
if argument provided then will proceed for next step
else will prompt for user input asking Name of the Model
then
it will first check model exists or not.
if exists will throw an error and will exit mentioning model already exists.
else will ask for user input giting numeric value corresponding to options
1 standard
2 comprehensive
if 1 means standard choosen then it will just create a basic model having
protected $fillable array with values as name, description 
protected $hidden array with value as status
protected $casts  array as key value pair of all values of fillable and hidden 
'name' => 'string',
'description' => 'string',
'status'=>'boolean'
if 2 comprehensive chosen then
it will ask user to provide $fillable array values one by one and corresponding to each value it should provide option to choose from  datadatypes.
it will ask user to provide $hidden array values one by one and corresponding to each value it should provide option to choose from  datadatypes.
 All values provided in $fillable and $hidden with their datatype will be used in $casts
 array as 'key' => 'value' pair. key will be values and value will be datatype
Notable points:
code should follow the Naming convention like Pascal, Camel, Snake, Lower, Upper Cases wherever seems fit.
In every action when giving options to choose by default is should provide abort option and complete and continue as it seems fit wherever.
Once on final complete create model, exit with successful message.

#### Reverting back
#### Migration creation
- Provide bash script for creating migration, 
It will read all the models then provide user an optionto chooe from all,comma separarted numeric representative of model,other
it will first check migration class alreay exists or not.
if exists will throw an error and will exit mentioning migration already exists.
else will ask for user input with options for each model class
1 standard
2 modelbased
3 custom

case standard create a basic migration
case modelbased
it will read from model attributes  tablename,casts
use tablename as db table
casts key as column name and casts value as column datatype
case custom
prompt to user asking table name, column name and type in comma separated with format name:type
create migration based on the inputs given