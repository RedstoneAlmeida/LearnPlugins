## Create basic command.

- See in BasicCommands.php

```php
  // function onCommand($sender, $command, $label, $args)
  public function onCommand(CommandSender $sender, Command $command, $label, $args){
      switch($command->getName()){
            case "youcommand":
                  break;
      }
  }
```
