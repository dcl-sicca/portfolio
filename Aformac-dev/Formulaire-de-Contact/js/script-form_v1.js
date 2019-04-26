var formValid = document.getElementById('bouton_envoi');
            var prenom = document.getElementById('prenom');
            var missPrenom = document.getElementById('missPrenom');
            var prenomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (prenom.validity.valueMissing){
                    event.preventDefault();
                    missPrenom.textContent = 'Prénom manquant';
                    missPrenom.style.color = 'red';
                //Si le format de données est incorrect
                }else if (prenomValid.test(prenom.value) == false){
                    event.preventDefault();
                    missPrenom.textContent = 'Format incorrect';
                    missPrenom.style.color = 'orange';
                }else{ 
                }
            }