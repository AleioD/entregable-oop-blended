<?php

	class Actor
	{
		private $id;
		private $first_name;
		private $last_name;
		private $rating;
		private $favorite_movie_id;
		private $favorite_movie_name;

		public function __construct($first_name, $last_name, $rating)
		{
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->rating = $rating;
		}

		public function setId($id)
		{
			$this->id = $id;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setFirst_name($first_name)
		{
			$this->first_name = $first_name;
		}

		public function getFirst_name()
		{
			return $this->first_name;
		}

		public function setLast_name($last_name)
		{
			$this->last_name = $last_name;
		}

		public function getFull_name(){
			return $this->getFirst_name() . " " . $this->getLast_name();
		}

		public function getLast_name()
		{
			return $this->last_name;
		}

		public function setRating($rating)
		{
			$this->rating = $rating;
		}

		public function getRating()
		{
			return $this->rating;
		}

		public function setFavorite_movie_id($favorite_movie_id)
		{
			$this->favorite_movie_id = $favorite_movie_id;
		}

		public function getFavorite_movie_id()
		{
			return $this->favorite_movie_id;
		}

		public function setFavorite_movie_name($favorite_movie_name)
		{
			$this->favorite_movie_name = $favorite_movie_name;
		}

		public function getFavorite_movie_name()
		{
			if ($this->favorite_movie_name) {
				return $this->favorite_movie_name;
			}
			return 'No tiene película favorita';
		}
	}
