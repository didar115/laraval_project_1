function sentdata() {
    var Name = document.getElementById("name").value;
    var Class = document.getElementById("class").value;
    var Roll = document.getElementById("roll").value;
    var Birth = document.getElementById("birth_date").value;

    var url = "/insertdata";
    var data = { name: Name, class: Class, roll: Roll, birth_date: Birth };

    axios
        .post(url, data)
        .then(function (response) {
            alert(response.data);
        })
        .catch(function (error) {
            alert("error");
        });
}
