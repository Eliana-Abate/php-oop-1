<?php 

class Movies
{
  public $title;
  public $genre;
  public $description;
  public $director;
  public $year;


    public function __construct($_title, $_genre,  $_description, $_director, $_year)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->description = $_description;
        $this->director = $_director;
        $this->year = $_year;
    }
}


// Istanze 

$movie1 = new Movies ('Batman', 'Action, thriller, fantasy', "Batman is a 1989 American superhero film directed by Tim Burton and produced by Jon Peters and Peter Guber, based on the DC Comics character of the same name. It is the first installment of Warner Bros.' initial Batman film series. The film stars Jack Nicholson as the Joker and Michael Keaton as Bruce Wayne / Batman, alongside Kim Basinger, Robert Wuhl, Pat Hingle, Billy Dee Williams, Michael Gough, and Jack Palance. The film takes place early in the title character's war on crime, and depicts his conflict with the Joker.", 'Tim Burton', '1989');

$movie2= new Movies ('The Truman Show', 'Comedy, dramatic', "The Truman Show is a 1998 American psychological comedy-drama film[4] directed by Peter Weir, produced by Scott Rudin, Andrew Niccol, Edward S. Feldman, and Adam Schroeder, and written by Niccol. The film stars Jim Carrey as Truman Burbank, a man who grew up living an ordinary life that—unbeknownst to him—takes place on a large set populated by actors for a television show about him.", 'Peter Weir', '1998'); 

$movie3 = new Movies ('Ghost', 'Thriller, fantasy, romantic', "Ghost is a 1990 American romantic fantasy thriller film directed by Jerry Zucker, written by Bruce Joel Rubin, and starring Patrick Swayze, Demi Moore, Whoopi Goldberg, Tony Goldwyn, Vincent Schiavelli and Rick Aviles.[3] The plot centers on Sam Wheat (Swayze), a murdered banker whose ghost sets out to save his girlfriend, Molly Jensen (Moore) from the person who killed him through the help of a psychic Oda Mae Brown (Goldberg).", 'Jerry Zucker','1990');
