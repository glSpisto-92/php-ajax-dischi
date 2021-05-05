let app = new Vue (
  {
    el: '#app',
    data: {
      albums: [],
    },
    mounted: function(){

      let self = this;

      axios.get('http://localhost:8888/php-ajax-dischi/api.php')
      .then(function (response) {

        self.albums = response.data;
        // filtro in ordine gli album dal  piu vecchio
        /* self.albums.sort((a, b) => {return a.year - b.year});

        // ciclo gli albums per genere e poi pusho nel nuovo array
        self.albums.forEach((item, i) => {
          if(self.genres.includes(item.genre) == false){
            self.genres.push(item.genre);
          }
        }); */
      });
    },
  }
);
