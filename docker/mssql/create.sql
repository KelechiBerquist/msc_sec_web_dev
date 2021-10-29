--
-- Table structure for table movies
-- Here the same ticket price will be assumed for all attending
--

DROP TABLE IF EXISTS movies;
CREATE TABLE movies (
  movieID mediumint(8) UNSIGNED NOT NULL,
  movie_name varchar(255) NOT NULL,
  description text NOT NULL,
  ticket_price decimal(7,2) NOT NULL,
  rating char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table movie_bookings
--

DROP TABLE IF EXISTS movie_bookings;
CREATE TABLE movie_bookings (
  movieID mediumint(8) UNSIGNED NOT NULL,
  customerID mediumint(8) UNSIGNED NOT NULL,
  screening_date_time datetime NOT NULL,
  num_attending mediumint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table customers
--

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
  customerID mediumint(8) UNSIGNED NOT NULL,
  username varchar(30) NOT NULL,
  password_hash char(255) NOT NULL,
  customer_forename varchar(255) NOT NULL,
  customer_surname varchar(255) NOT NULL,
  customer_postcode varchar(255) NOT NULL,
  customer_address1 varchar(255) NOT NULL,
  customer_address2 varchar(255) DEFAULT NULL,
  date_of_birth datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table movies
--
ALTER TABLE movies
  ADD PRIMARY KEY (movieID);

--
-- Indexes for table movie_bookings
--
ALTER TABLE movie_bookings
  ADD PRIMARY KEY (movieID,customerID);

--
-- Indexes for table customers
--
ALTER TABLE customers
  ADD PRIMARY KEY (customerID);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table movies
--
ALTER TABLE movies
  MODIFY movieID mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table customers
--
ALTER TABLE customers
  MODIFY customerID mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;




INSERT INTO cinema.movies (movie_name,description,ticket_price,rating)
VALUES
	 ('Inception','Your mind is the scene of the crime. Box-office superstar Leonardo DiCaprio stars in this contemporary science fiction action film set \"within the architecture of the mind.\" Written, directed and produced by Oscar® and Golden Globe nominee Christopher Nolan (The Dark Knight, Batman Begins, The Prestige), this eagerly awaited follow-up to 2008\'s billion-dollar blockbuster is yet another visionary tale from a startingly original filmmaker who continually raises the bar with every film he makes. Shooting in London, Paris, Tangiers, Calgary and Los Angeles, Nolan\'s mind-bending film also stars Academy Award® winners Michael Caine and Marion Cotillard, in addition to Juno\'s Ellen Page, Batman Begins\' Cillian Murphy and Oscar® nominees Ken Watanabe (The Last Samurai) and Tom Berenger (Platoon).',120.00,'10'),
	 ('Memento','Leonard (Guy Pearce) is tracking down the man who raped and murdered his wife. The difficulty, however, of locating his wife\'s killer is compounded by the fact that he suffers from a rare, untreatable form of memory loss. Although he can recall details of life before his accident, Leonard cannot remember what happened fifteen minutes ago, where he\'s going, or why.',80.00,'10'),
	 ('The Prestige','An illusion gone horribly wrong pits two 19th-century magicians, Alfred Borden (Christian Bale) and Rupert Angier (Hugh Jackman), against each other in a bitter battle for supremacy. Terrible consequences loom when the pair escalate their feud, each seeking not just to outwit -- but to destroy -- the other man.',150.00,'10'),
	 ('Insomnia','From acclaimed director Chris Nolan (\"Memento\") comes the story of a veteran police detective (Al Pacino) who is sent to a small Alaskan town to investigate the murder of a teenage girl. Forced into a psychological game of cat-and-mouse by the primary suspect (Robin Williams), events escalate and the detective finds his own stability dangerously threatened.',80.00,'8'),
	 ('Interstellar','In Earth\'s future, a global crop blight and second Dust Bowl are slowly rendering the planet uninhabitable. Professor Brand (Michael Caine), a brilliant NASA physicist, is working on plans to save mankind by transporting Earth\'s population to a new home via a wormhole. But first, Brand must send former NASA pilot Cooper (Matthew McConaughey) and a team of researchers through the wormhole and across the galaxy to find out which of three planets could be mankind\'s new home.',120.00,'10'),
	 ('Dunkirk','In May 1940, Germany advanced into France, trapping Allied troops on the beaches of Dunkirk. Under air and ground cover from British and French forces, troops were slowly and methodically evacuated from the beach using every serviceable naval and civilian vessel that could be found. At the end of this heroic mission, 330,000 French, British, Belgian and Dutch soldiers were safely evacuated.',110.00,'10'),
	 ('Following','Following is a 1998 independent neo-noir crime thriller film written and directed by Christopher Nolan. It tells the story of a young man who follows strangers around the streets of London and is drawn into a criminal underworld when he fails to keep his distance.',70.00,'10'),
	 ('Machinist','Factory worker Trevor Reznik (Christian Bale) suffers from insomnia so severe that his condition has taken its toll on his weight and his mental health. When Trevor unintentionally causes an on-the-job accident that horribly injures a coworker (Michael Ironside), he begins to become even more troubled. Despite a relationship with Stevie (Jennifer Jason Leigh), a pretty prostitute, Trevor descends further into paranoia, blaming his problems on an enigmatic figure named Ivan (John Sharian).',70.00,'7'),
	 ('Children of Men','When infertility threatens mankind with extinction and the last child born has perished, a disillusioned bureaucrat (Clive Owen) becomes the unlikely champion in the fight for the survival of Earth\'s population; He must face down his own demons and protect the planet\'s last remaining hope from danger.',50.00,'7'),
	 ('Now You See Me','Charismatic magician Atlas (Jesse Eisenberg) leads a team of talented illusionists called the Four Horsemen. Atlas and his comrades mesmerize audiences with a pair of amazing magic shows that drain the bank accounts of the corrupt and funnel the money to audience members. A federal agent (Mark Ruffalo) and an Interpol detective (Mélanie Laurent) intend to rein in the Horsemen before their next caper, and they turn to Thaddeus (Morgan Freeman), a famous debunker, for help.',100.00,'10');
INSERT INTO cinema.movies (movie_name,description,ticket_price,rating)
VALUES
	 ('Kingsman: The Secret Service','Gary \"Eggsy\" Unwin (Taron Egerton), whose late father secretly worked for a spy organization, lives in a South London housing estate and seems headed for a life behind bars. However, dapper agent Harry Hart (Colin Firth) recognizes potential in the youth and recruits him to be a trainee in the secret service. Meanwhile, villainous Richmond Valentine (Samuel L. Jackson) launches a diabolical plan to solve the problem of climate change via a worldwide killing spree.',120.00,'10'),
	 ('King of Thieves','A crew of retired crooks pulls off a major heist in London\'s jewelry district.',100.00,'6'),
	 ('The Quiet American','From the classic novel by Graham Greene comes a murder mystery centered on a love triangle set against the French Indochina War in Vietnam, circa 1952. It\'s the story of a veteran English journalist (Michael Caine), a young American (Brendan Fraser), and a beautiful Vietnamese woman caught between them. This is a world where nothing is what it seems -- suffused with opium, intrigue, and betrayal.',90.00,'6'),
	 ('Easy Rider','Wyatt (Peter Fonda) and Billy (Dennis Hopper), two Harley-riding hippies, complete a drug deal in Southern California and decide to travel cross-country in search of spiritual truth. On their journey, they experience bigotry and hatred from the inhabitants of small-town America and also meet with other travelers seeking alternative lifestyles. After a terrifying drug experience in New Orleans, the two travelers wonder if they will ever find a way to live peacefully in America.',50.00,'6'),
	 ('Terms of Endearment','Widow Aurora Greenway (Shirley MacLaine) and her daughter, Emma (Debra Winger), have a strong bond, but Emma marries teacher Flap Horton (Jeff Daniels) against her mother\'s wishes. When the marriage grows sour due to Flap\'s cheating, Emma eventually splits from him, returning to her mother, who is involved with a former astronaut (Jack Nicholson). Soon, Emma learns that she has terminal cancer. In the hospital, supported by Aurora, she tries to make peace with Flap and her children.',40.00,'6'),
	 ('Something\'s Gotta Give','When aging womanizer Harry Sanborn (Jack Nicholson) and his young girlfriend, Marin (Amanda Peet), arrive at her family\'s beach house in the Hamptons, they find that her mother, dramatist Erica Barry (Diane Keaton), also plans to stay for the weekend. Erica is scandalized by the relationship and Harry\'s sexist ways. But when Harry has a heart attack, and a doctor (Keanu Reeves) prescribes bed rest at the Barry home, he finds himself falling for Erica -- who, for once, may be out of his league.',40.00,'5'),
	 ('Anger Management','Dave Buznik (Adam Sandler) is usually a mild-mannered nonconfrontational guy. But after an altercation aboard an airplane, he is remanded to the care of an anger-management therapist, Dr. Buddy Rydell (Jack Nicholson), who could probably use a little anger management himself.',40.00,'6'),
	 ('The Shining','Jack Torrance (Jack Nicholson) becomes winter caretaker at the isolated Overlook Hotel in Colorado, hoping to cure his writer\'s block. He settles in along with his wife, Wendy (Shelley Duvall), and his son, Danny (Danny Lloyd), who is plagued by psychic premonitions. As Jack\'s writing goes nowhere and Danny\'s visions become more disturbing, Jack discovers the hotel\'s dark secrets and begins to unravel into a homicidal maniac hell-bent on terrorizing his family.',60.00,'7'),
	 ('The Shawshank Redemption','Andy Dufresne (Tim Robbins) is sentenced to two consecutive life terms in prison for the murders of his wife and her lover and is sentenced to a tough prison. However, only Andy knows he didn\'t commit the crimes. While there, he forms a friendship with Red (Morgan Freeman), experiences brutality of prison life, adapts, helps the warden, etc., all in 19 years.',50.00,'10'),
	 ('Seven','When retiring police Detective William Somerset (Morgan Freeman) tackles a final case with the aid of newly transferred David Mills (Brad Pitt), they discover a number of elaborate and grizzly murders. They soon realize they are dealing with a serial killer (Kevin Spacey) who is targeting people he thinks represent one of the seven deadly sins. Somerset also befriends Mills\' wife, Tracy (Gwyneth Paltrow), who is pregnant and afraid to raise her child in the crime-riddled city.',60.00,'10');
INSERT INTO cinema.movies (movie_name,description,ticket_price,rating)
VALUES
	 ('Million Dollar Baby','Frankie Dunn (Clint Eastwood) is a veteran Los Angeles boxing trainer who keeps almost everyone at arm\'s length, except his old friend and associate Eddie \"Scrap Iron\" Dupris (Morgan Freeman). When Maggie Fitzgerald (Hilary Swank) arrives in Frankie\'s gym seeking his expertise, he is reluctant to train the young woman, a transplant from working-class Missouri. Eventually, he relents, and the two form a close bond that will irrevocably change them both.',70.00,'6'),
	 ('Invictus','Following the fall of apartheid, newly elected President Nelson Mandela (Morgan Freeman) faces a South Africa that is racially and economically divided. Believing he can unite his countrymen through the universal language of sport, Mandela joins forces with Francois Pienaar (Matt Damon), captain of the rugby team, to rally South Africans behind a bid for the 1995 World Cup Championship.',70.00,'6'),
	 ('Driving Miss Daisy','Daisy Werthan (Jessica Tandy), an elderly Jewish widow living in Atlanta, is determined to maintain her independence. However, when she crashes her car, her son, Boolie (Dan Aykroyd), arranges for her to have a chauffeur, an African-American driver named Hoke Colburn (Morgan Freeman). Daisy and Hoke\'s relationship gets off to a rocky start, but they gradually form a close friendship over the years, one that transcends racial prejudices and social conventions.',40.00,'4'),
	 ('Lean on Me','In this fact-based film, a New Jersey superintendent, Dr. Frank Napier (Robert Guillaume), watches helplessly as East Side High becomes the lowest-ranked school in the state. With nowhere else to turn, Dr. Napier enlists maverick ex-teacher Joe Clark (Morgan Freeman) to take over as principal of the declining school. Unfortunately for Clark, before he can focus on improving the student body\'s state exam scores, he has to somehow rid the school of its gang and narcotics problems.',40.00,'10'),
	 ('The Dark Knight Rises','It has been eight years since Batman (Christian Bale), in collusion with Commissioner Gordon (Gary Oldman), vanished into the night. Assuming responsibility for the death of Harvey Dent, Batman sacrificed everything for what he and Gordon hoped would be the greater good. However, the arrival of a cunning cat burglar (Anne Hathaway) and a merciless terrorist named Bane (Tom Hardy) force Batman out of exile and into a battle he may not be able to win.',100.00,'10'),
	 ('The Dark Knight','With the help of allies Lt. Jim Gordon (Gary Oldman) and DA Harvey Dent (Aaron Eckhart), Batman (Christian Bale) has been able to keep a tight lid on crime in Gotham City. But when a vile young criminal calling himself the Joker (Heath Ledger) suddenly throws the town into chaos, the caped Crusader begins to tread a fine line between heroism and vigilantism.',100.00,'10'),
	 ('Batman Begins','A young Bruce Wayne (Christian Bale) travels to the Far East, where he\'s trained in the martial arts by Henri Ducard (Liam Neeson), a member of the mysterious League of Shadows. When Ducard reveals the League\'s true purpose -- the complete destruction of Gotham City -- Wayne returns to Gotham intent on cleaning up the city without resorting to murder. With the help of Alfred (Michael Caine), his loyal butler, and Lucius Fox (Morgan Freeman), a tech expert at Wayne Enterprises, Batman is born.',60.00,'10');
