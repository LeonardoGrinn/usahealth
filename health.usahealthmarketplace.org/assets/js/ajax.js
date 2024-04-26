function getJSONData() {
   /*  alert('Is working'); */

    // New Instance
    const xhttp = new XMLHttpRequest();

    // Open JSON File
    xhttp.open('GET', '../json/medicare-listing.json', true);

    //Send
    xhttp.send();

    // Get Response
    xhttp.onreadystatechange = function() {

        // Check Status
        if(this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            let data = JSON.parse(this.responseText);
            //alert(data);
            console.log(data);

            let res = document.querySelector('#res');
            res.innerHTML = '';

            // Get every data of the JSON an rendering in a list
            for (let listing of data) {
                //console.log(listing);

                res.innerHTML += `
                    <h3>${listing.title}</h3>
                    <p>${listing.description}</p>
                    <a href="${listing.link}" target="_blank" rel="noopener noreferrer"></a>
                `
            }
        }



    }
}