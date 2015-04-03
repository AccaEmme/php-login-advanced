<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED", "Il tuo account non è ancora stato attivato. Gentilmente clicca sul link di conferma ricevuto via e-mail.");
define("MESSAGE_CAPTCHA_WRONG", "Codice di conferma errato!");
define("MESSAGE_COOKIE_INVALID", "Cookie non valido");
define("MESSAGE_DATABASE_ERROR", "Problemi nella connessione al database");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Questo indirizzo e-mail risulta già registrato. Per favore usa \"Ho dimenticato la password\" se non la ricordi.");
define("MESSAGE_EMAIL_CHANGE_FAILED", "Mi dispiace, cambio e-mail fallito.");
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Il tuo indirizzo e-mail è stato modificato con successo. Il tuo nuovo indirizzo è: ");
define("MESSAGE_EMAIL_EMPTY", "E-mail non può essere vuota");
define("MESSAGE_EMAIL_INVALID", "L'e-mail inserita non ha un formato valido");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Mi dispiace, l'indirizzo e-mail è lo stesso dell'attuale. Per favore scegline un altro.");
define("MESSAGE_EMAIL_TOO_LONG", "E-mail non può essere più lungo di 64 characters");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Empty link parameter data.");
define("MESSAGE_LOGGED_OUT", "Ti sei disconnesso.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Login fallito.");
define("MESSAGE_OLD_PASSWORD_WRONG", "VECCHIA password errata.");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Password e conferma password non sono uguali");
define("MESSAGE_PASSWORD_CHANGE_FAILED", "Sorry, your password changing failed.");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Password modificata con successo!");
define("MESSAGE_PASSWORD_EMPTY", "Campo password è vuoto!");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "E-mail di reset password NON inviata correttamente! Errore: ");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "E-mail di reset password inviata con successo!");
define("MESSAGE_PASSWORD_TOO_SHORT", "La password deve essere composta da almeno 6 caratteri");
define("MESSAGE_PASSWORD_WRONG", "Password errata. Riprova.");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Hai già inserito una password errata per 3 volte o più. Per favore aspetta 30 secondi prima di riprovare.");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Mi dispiace, nessun id o codice di verifica presente...");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL", "Attivazione eseguita con successo! Ora puoi eseguire il login!");
define("MESSAGE_REGISTRATION_FAILED", "Mi dispiace, la tua registrazione è fallita. Torna indietro e riprova.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "L'indirizzo per il reset risulta scaduto. Usa l'indirizzo per il reset entro 1 ora.");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Mi dispiace, non possiamo inviarti un codice verifica e-mail. Il tuo account NON è stato creato.");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT", "E-mail verifica NON inviata con successo! Errore: ");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Il tuo account è stato creato con successo e ti abbiamo inviato un'e-mail. Per favore clicca sull'INDIRIZZO DI VERIFICA contenuto nell'e-mail.");
define("MESSAGE_USER_DOES_NOT_EXIST", "Questo utente non esiste");
define("MESSAGE_USERNAME_BAD_LENGTH", "Username non può essere più corto di 2 caratteri e non può essere più lungo di 64caratteri");
define("MESSAGE_USERNAME_CHANGE_FAILED", "Mi dispiace, fallita rinominazione del nome utente scelto.");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Il tuo username è stato modificato con successo. Il nuovo username è: ");
define("MESSAGE_USERNAME_EMPTY", "Campo username vuoto");
define("MESSAGE_USERNAME_EXISTS", "Mi dispiace, questo username risulta già preso. Scegline un altro.");
define("MESSAGE_USERNAME_INVALID", "L'username non rispetta lo schema: sono consentiti solo caratteri dalla a-Z e numeri, minimo 2 massimo 64 caratteri");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Mi dispiace, questo nome utente è lo stesso di quello in uso. Per favore scegline un altro.");

// views
define("WORDING_BACK_TO_LOGIN", "Torna indietro alla pagina di login");
define("WORDING_CHANGE_EMAIL", "Modifica e-mail");
define("WORDING_CHANGE_PASSWORD", "Modifica password");
define("WORDING_CHANGE_USERNAME", "Modifica username");
define("WORDING_CURRENTLY", "currently");
define("WORDING_EDIT_USER_DATA", "Modifica dati utente");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Sei connesso e puoi modificare le tue credenziali qui");
define("WORDING_FORGOT_MY_PASSWORD", "Ho dimenticato la mia password");
define("WORDING_LOGIN", "Log in");
define("WORDING_LOGOUT", "Log out");
define("WORDING_NEW_EMAIL", "Nuova e-mail");
define("WORDING_NEW_PASSWORD", "Nuova password");
define("WORDING_NEW_PASSWORD_REPEAT", "Ripeti nuova password");
define("WORDING_NEW_USERNAME", "Nuovo username (username non può essere vuoto e deve essere azAZ09 e tra 2-64 caratteri)");
define("WORDING_OLD_PASSWORD", "Vecchia Password");
define("WORDING_PASSWORD", "Password");
define("WORDING_PROFILE_PICTURE", "Immagine di profilo (da gravatar):");
define("WORDING_REGISTER", "Registrati");
define("WORDING_REGISTER_NEW_ACCOUNT", "Registra un account");
define("WORDING_REGISTRATION_CAPTCHA", "Per favore inserisci questi caratteri");
define("WORDING_REGISTRATION_EMAIL", "E-mail utente (per favore fornisci un indirizzo e-mail reale, si otterrà un e-mail di verifica con un indirizzo di attivazione)");
define("WORDING_REGISTRATION_PASSWORD", "Password (min. 6 caratteri!)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Ripeti password");
define("WORDING_REGISTRATION_USERNAME", "Username (solo lettere e numeri, dai 2 ai 64 caratteri)");
define("WORDING_REMEMBER_ME", "Mantienimi connesso (per 2 settimane)");
define("WORDING_REQUEST_PASSWORD_RESET", "Richiesto un reset password. Inserisci il tuo username e riceverai via e-mail le istruzioni:");
define("WORDING_RESET_PASSWORD", "Reset password");
define("WORDING_SUBMIT_NEW_PASSWORD", "Invia nuova password");
define("WORDING_USERNAME", "Username");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Sei collegato come ");
