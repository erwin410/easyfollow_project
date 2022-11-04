
       function buttonClickGET() {
        var url = "http://localhost/easyfollow/api.php";
      
        fetch(url)
          .then((res) => res.json())
          .then((out) => {
      
            console.table(out);
      
            const text = JSON.stringify(out);
            const obj = JSON.parse(text);
      
            console.table(obj);
      
            let textFromJSON = obj;
            textFromJSON.forEach(mafonction);
      
          })
      }
      
        function mafonction(data) {
          let container2 = document.createElement("tr");
          let newP2 = document.createElement("td");
          let newP3 = document.createElement("td");
          let newP4 = document.createElement("td");
          let newP5 = document.createElement("td");
          let newContent2 = document.createTextNode(data.nom);
          let newContent3 = document.createTextNode(data.nb_heure);
          let newContent4 = document.createTextNode(data.name);
          let newContent5 = document.createTextNode(data.gain);
          newP2.className = "w-1/3 text-left py-3 px-4";
          newP3.className = "w-1/3 text-left py-3 px-4";
          newP4.className = "w-1/3 text-left py-3 px-4";
          newP5.className = "w-1/3 text-left py-3 px-4";
          newP2.appendChild(newContent2);
          newP3.appendChild(newContent3);
          newP4.appendChild(newContent4);
          newP5.appendChild(newContent5);
          container2.appendChild(newP2);
          container2.appendChild(newP3);
          container2.appendChild(newP4);
          container2.appendChild(newP5);
          document.getElementsByClassName("time-container")[0].appendChild(container2);
      
      }