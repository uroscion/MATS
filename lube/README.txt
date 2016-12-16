Here are specific instructions for setting liquibase up to run through the terminal for the MATS project.

Once you use hg to pull in the lube directory, you'll need to add that directory to your $PATH variable.  (After that, try the command "liquibase" in a terminal to confirm it is working as expected.)

Rename liquibase.properties.copy to liquibase.properties and modify the classpath property so that is matches your full path to the mysql*.jar inside the ~/lube/lib folder.

At that point things should be ready to go.  Give it a try by running this command... 
liquibase --defaultsFile=liquibase.properties snapshot

That should output a bunch of liquibase statements to your terminal finishing with the lines "Liquibase 'snapshot' Successful".

*********** instructions for beginning to use liquibase ***********
1) The file "changelog.xml" has been generated from my current database. You should not need to recreate this file unless there have been changes. In that case Use "liquibase generateChangeLog"
2) The file "changelogwithdata.xml" was generated with the diffTypes=data option, it contains only data rather than structure. Should probably track that too. 
3) Run "liquibase --changeLogFile="changelog.xml" changeLogSync" in the working directory of the changeLog (properties is read from there as well) to begin tracking changes in your database. This will add two tables to the database: databasechangelog and databasechangeloglock
4) After that changes can be added to the changelog as changesets, and running "liquibase --changelogfile="changelog.xml" update" will run the changes. Changesets can either be written as XML or SQL.



++++ END CUSTOM README.txt ++++





This directory allows you both run Liquibase in a normal production setting to manage your database as well as develop
and test Liquibase extensions.

ROOT DIRECTORY STRUCTURE:
----------------------------------------

The root of this directory is designed to run Liquibase. There are shell and batch scripts (liquibase and liquibase.bat)
which will run the Liquibase command line application.

The "lib" directory is automatically scanned by the liquibase scripts and all .jar files are added to the classpath.
If you have JDBC drivers or Liquibase extensions that you want to be automatically included, add them to this directory.

The "lib-other" directory is not automatically scanned by the liquibase scripts. This directory can be used to store jar
files that are referenced with manual --classpath references. Storing JDBC drivers in lib-other instead of lib allows
you to control which versions of the driver are used by liquibase. Storing extensions in lib-other instead of lib allows
you to control which extensions are used by liquibase.

The "sdk" directory is designed to allow you to develop and test Liquibase extensions as well as test Liquibase itself.
See below for more information.


SDK DIRECTORY STRUCTURE
----------------------------------------

** For more information, see http://liquibase.org/documentation/sdk**

The "sdk" directory contains liquibase-sdk shell and batch scripts for running the Liquibase SDK application.
The Liquibase-sdk application allows you to create and manage test databases in virtual machines, execute tests, and more.

The "javadoc" directory contains the Liquibase core library API documentation.

The "lib-sdk" directory is used to store jars used by liquibase-sdk but not standard liquibase usage. Anything added to
this directory is automatically included in the liquibase-sdk classpath, but if you have any additional jars to
include, add them to LIQUIBASE_HOME/lib or LIQUIBASE_HOME/lib-other instead of here.

The "vagrant" directory is where images created by the "liquibase-sdk vagrant" command are stored.
See below for more information.

The "workspace" directory is a simple structure designed to allow testing of liquibase and liquibase extensions. For
real usage, you should have your changelog files managed with your application code but the workspace directory has a
starting example changelog as well as properties files for several databases that leverage the virtual machines managed
through the "liqubiase-sdk vagrant" command.

VAGRANT USAGE
----------------------------------------

You can easily create databases for testing Liquibase using the vagrant configurations the vagrant directory and with
the "liquibase-sdk vagrant" command.

For commercial databases, the generated vagrant configurations expect the installers/zip/etc. files to be placed in
LIQUIBASE_HOME/sdk/vagrant/install-files/PRODUCT. Where PRODUCT is "oracle", "mssql", "windows" etc. Running
"liquibase-sdk vagrant init" should give you information on what files are expected in this directory.
