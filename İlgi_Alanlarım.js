const apikey ="zcR8ISfX6lZVHFo9jXH6+g==Nd1F2ruHy860mA0z";
var i=0;




    

    async function Egzersiz() {
        try {
            let Kas = document.getElementById("Arama_Kutusu").value.trim();
        if (Kas === "") {
            alert("Lütfen bir kas ismi girin");
            return;
        }
            const response = await fetch(`https://api.api-ninjas.com/v1/exercises?muscle=${Kas}` ,
                {
                    method: 'GET',
                    headers: {
                        'X-Api-Key':apikey,
                        'Content-Type': 'application/json'
                    }
                });

            if (!response.ok) {
                const errorText = await response.text();
                throw new Error(errorText);
            }
          
            const data = await response.json();
            
            
              document.getElementById("Name").innerHTML=data[i].muscle
              document.getElementById("ExcersizeName").innerHTML=data[i].name;
              document.getElementById("ExcersizeType").innerHTML=data[i].type;
              document.getElementById("Ekipman").innerHTML=data[i].equipment;
              document.getElementById("Aciklama_Videosu").href=`https://www.youtube.com/results?search_query=${data[i].name}+tutorial`;
              document.getElementById("Kas_Görseli").href=`https://www.google.com/search?tbm=isch&q=${encodeURIComponent(data[i].muscle)}`;
              if (i >= data.length) {
                i = 0;
            }
            if (data.length === 0) {
                alert("Bu kas için egzersiz bulunamadı.");
                return;
            }

            i++;

        } catch (error) {
            console.error('Error:', error.message);
        }
        i++;
    }
    
  
    

document.getElementById("Arama_Kutusu").addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
        Egzersiz();
    }
});

document.getElementById("Gonder").addEventListener("click", function(event) {
    // Formun gönderilmesini engellemek için event.preventDefault() kullanılır
    event.preventDefault();

    Egzersiz();
  });


 
 