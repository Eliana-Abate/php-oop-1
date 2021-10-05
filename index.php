<?php 

class Movies
{
  public $title;
  public $genre;
  public $description;
  public $director;
  public $year;


    public function __construct($_title, $_year, $_genre,  $_description, $_director)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->description = $_description;
        $this->director = $_director;
    }

    public function getMoviesPeriod($min, $max)
    {
     
        return ($this->year >= $min && $this->year <= $max);
    
    }
}


$movies_list = [];

// Istanze 

$movie1 = new Movies ('Batman', '1989', 'Action, thriller, fantasy', 'Batman is a 1989 American superhero film directed by Tim Burton and produced by Jon Peters and Peter Guber, based on the DC Comics character of the same name. It is the first installment of Warner Bros\'s initial Batman film series. The film stars Jack Nicholson as the Joker and Michael Keaton as Bruce Wayne / Batman, alongside Kim Basinger, Robert Wuhl, Pat Hingle, Billy Dee Williams, Michael Gough, and Jack Palance. The film takes place early in the title character\'s war on crime, and depicts his conflict with the Joker.', 'Tim Burton');

$movie2= new Movies ('The Truman Show', '1998', 'Comedy, dramatic', 'The Truman Show is a 1998 American psychological comedy-drama film directed by Peter Weir, produced by Scott Rudin, Andrew Niccol, Edward S. Feldman, and Adam Schroeder, and written by Niccol. The film stars Jim Carrey as Truman Burbank, a man who grew up living an ordinary life that—unbeknownst to him—takes place on a large set populated by actors for a television show about him.', 'Peter Weir'); 

$movie3 = new Movies ('Ghost', '1990', 'Thriller, fantasy, romantic', 'Ghost is a 1990 American romantic fantasy thriller film directed by Jerry Zucker, written by Bruce Joel Rubin, and starring Patrick Swayze, Demi Moore, Whoopi Goldberg, Tony Goldwyn, Vincent Schiavelli and Rick Aviles. The plot centers on Sam Wheat (Swayze), a murdered banker whose ghost sets out to save his girlfriend, Molly Jensen (Moore) from the person who killed him through the help of a psychic Oda Mae Brown (Goldberg).', 'Jerry Zucker');

$movie4 = new Movies ('Batman Begins', '2005', 'Action, thriller, fantasy', 'Batman Begins is a 2005 superhero film directed by Christopher Nolan and written by Nolan and David S. Goyer. Based on the DC Comics character Batman, it stars Christian Bale as Bruce Wayne / Batman, with Michael Caine, Liam Neeson, Katie Holmes, Gary Oldman, Cillian Murphy, Tom Wilkinson, Rutger Hauer, Ken Watanabe, and Morgan Freeman in supporting roles. The film reboots the Batman film series, telling the origin story of Bruce Wayne from the death of his parents to his journey to become Batman and his fight to stop Ra\'s al Ghul and the Scarecrow from plunging Gotham City into chaos.', 'Christopher Nolan');




$movies_list[] = $movie1;
$movies_list[] = $movie2;
$movies_list[] = $movie3;
$movies_list[] = $movie4;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi Passi con le Classi</title>
</head>
<body>
    <header>
        <h1> '80s - '90s Movies</h1>
        <hr>
    </header> 

    <main>
        <?php foreach ($movies_list as $movie) : ?>

            <?php if (!$movie->getMoviesPeriod(1980, 1999)) continue; ?>
                 <h3><?php echo $movie->title?></h3>
                 <p><strong>Genre:</strong> <?php echo $movie->genre?></p>
                 <p><strong>Description:</strong> <?php echo $movie->description?></p>
                 <p><strong>Directed by:</strong> <?php echo $movie->director?></p>
                 <p><strong>Year:</strong> <?php echo $movie->year?></p>
     
                 <br>
        <?php endforeach ?>

    </main>


</body>
</html>