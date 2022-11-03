
       function api() {
        var url = "http://localhost/easyfollow/api.php"
    
        fetch(url)
        .then((res) => res.json())
        .then((out) => {
    
            console.table(out);
    
            const text = JSON.stringify(out);
            const obj = JSON.parse(text);
    
            console.table(obj);
    
            let textFromJSON = obj;
            textFromJSON.forEach(mafonction)
          
        })
    
        function mafonction(data){
          let container2 = document.createElement("div");
          container2.className = "child-holder2";
          let newP2 = document.createElement("p");
          newP2.className = "child2";
          let newContent2 = document.createTextNode(data.id);
          newP2.appendChild(newContent2);
          container2.appendChild(newP2);
          document.getElementsByClassName("time-container")[0].appendChild(container2);
       
        }
    }

    var monEntier = parseInt("54totoPouet32"); // monEntier = 54
var monFlottant = parseFloat("54.12totoPouet32"); // monEntier = 54.12

function totalgain(){
  include('connexions.php');
  }
  function nbheure() {
    var url = "http://localhost/easyfollow/requete.php";
    fetch(url)
    
      .then((res) => res.json())
      .then((out) => {
        console.table(out);
        const text = JSON.stringify(out);
        const obj = JSON.parse(text);
         console.log(obj[0].requete);
   
        document.getElementById("nb_heure").innerHTML = obj[0].requete;
        
      });

}