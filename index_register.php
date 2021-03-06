<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
    <form>
        <input id="username" type="text" placeholder="Username" onfocusout=check_username()>
        <input id="mdp" type="text" placeholder="Mots de passe" onfocusout=check_mdp()>
        <input id="mail" type="text" placeholder="Exemple@mail.com" onfocusout=check_mail()>
    </form>
    <button id="submit" onclick="animation()">REGISTER</button>
</body>

<script>
    function check_mail() { // Fonction qui vérifie si le mail est valide
        var mail = document.getElementById("mail").value; //récupération de la valeur de l'input
        var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/; // regex pour vérifier si le mail est valide
        if(!regex.test(mail)) { // si le mail n'est pas valide
            console.log("Votre mail n'est pas valide"); // on affiche un message d'erreur
            return false;
        }   
        else { // si le mail est valide
            console.log("Votre mail est valide"); // sinon on affiche un message de succès
            return true;
        }
    }   // On vérifie que l'input contient @ et .com
 
    function check_mdp() { // Fonction qui vérifie si le mdp est valide
        var mdp = document.getElementById("mdp").value;
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/; // regex pour vérifier si le mdp est valide
        if(!regex.test(mdp)) {
            console.log("Votre mot de passe n'est pas valide");
            return false;
        }
        else {
            console.log("Votre mot de passe est valide");
            return true;
        }
    }

    function check_username() { // Fonction qui vérifie si le nom d'utilisateur est valide
        var username = document.getElementById("username").value; // récupération de la valeur de l'input
        var regex = /^[a-zA-Z0-9]{3,}$/;
        if(!regex.test(username)) {
            console.log("Votre nom d'utilisateur n'est pas valide");
            return false;
        }
        else {
            console.log("Votre nom d'utilisateur est valide");
            return true;
        }
    }

    function animation() { // fonction qui permet d'animer le bouton
        var button = document.getElementById('submit')
        button.style.width="80px"
        button.innerHTML=`<div id="laoder" style="animation: laoding 1s linear infinite; position: absolute; width: 25px; height: 25px; border-radius: 50px; border-top: solid 5px white; border: solid 5px rgba(255, 255, 255, 0.171); display: flex; justify-content: center; align-items: center; border-top: solid 5px white;"></div>` // On ajoute un loader

        if (check_mail() == false && check_mdp() == false && check_username() == false) {
            button.style.width="100px"
            button.style.backgroundColor='#FF4747'
            button.innerHTML=`<img src="./img/uncheck.png" alt="" style="width: 40px;">`
        } // Si l'input contient @ et .com, on change le bouton en vert
        else {
            button.style.width="100px"
            button.style.backgroundColor='#88FF6A'
            button.innerHTML=`<img src="./img/check.png" alt="" style="width: 40px;">`
        } // Sinon on change le bouton en rouge

    } // On ajoute un loader

</script>
</html>