# Rover Movement

Rover movement is a my small project to workout

## Installation

If you need to install php and composer, use any of the official [PHP](https://www.php.net/downloads.php) and 
[Composer](https://getcomposer.org/download/) installers provided for your operating system.

Clone the project repository:

```bash
git clone git@github.com:salihbasakk/rover-movement.git
```

Make rover-movement the current working directory:

```bash
cd rover-movement
```

Install the project dependencies:

```composer
composer install
```

## Usage

Create new Rover Movement Service

```
$roverMovement = new RoverMovementService();
```

Specify starting point

```
[$x, $y, $z] = [1, 2, 'N']  
```

Give river instructions

```
$instructions = str_split('LMLMLMRRM');
```

And finally;

```
$result = $roverMovement->moveAction($x, $y, $z, $instructions);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.