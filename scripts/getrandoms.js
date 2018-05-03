//send request to script; receive rando

fetch('scripts/rng.php', {'number': 4})
  .then(function(response) {
    return response.json();
  })
  .then(function(myJson) {
    console.log("Random Number:" + myJson);
  });