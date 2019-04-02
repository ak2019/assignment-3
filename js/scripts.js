function getTweets(t){
    var xhr = new XMLHttpRequest();
    var input = document.getElementById("query");
    var query = input.value;


    xhr.open('GET', 'get_tweets.php?q='+ query, true); //this changes the state of xmlhttp
    xhr.send();

    xhr.onreadystatechange = function() {

        if(xhr.status === 200){

            var tweets = JSON.parse(xhr.responseText);

            tweets = tweets.statuses;

            var view = '';
            //  EXAMPLE OUTPUT TO A LIST
            view += "<table class='table' border='0'><tr><th class='head1'>DATE</th><th class='head2'>Image</th><th class='head3'>tweet</th><th class='head4'>Name</th></tr>";
            tweets.forEach(function(tweet) {
                if (tweet.text.length > 5) {
                    var d = tweet.created_at.replace("+0000", "");
                    view += "<tr>";
                    view += "<td class='date'>" + d + "</td>";
                    view += "<td class='profImage'><img src='" + tweet.user.profile_image_url + "'/></td>";
                    view += "<td class='tweet'>" + tweet.text + "</td>";
                    view += "<td class='name'>" + tweet.user.name + "</td>";
                    view += "</tr>";
                }


            });
            view += "</table>";

            document.getElementById("results").innerHTML = view;
            document.getElementById("logo").setAttribute("style","opacity:0.1; -moz-opacity:0.5; filter:alpha(opacity=50)");


        } else {
            console.log(xhr);
            document.getElementById("results").innerHTML = xhr.responseText;
        }
    }
}