# PHP wrapper pro práci s Ecomail.cz API

V tomto forku je navíc následující:
- klient vyhazuje vyjímky:
    - InvalidApiKeyException
    - RequestsLimitExceededException
    - InvalidResponseCodeException
    - InvalidResponseFormatException
- třída Ecomail přejmenována na Ecomail\Client (zpětně kompatibilní třída v globálním namespacu stále existuje)
- možnost předat do klienta callback, který může donastavit curl resource

# Instalace

```
composer require ecomailcz/ecomail
```

# Použití

```
$ecomail = new Ecomail('API_KEY');
$ecomail->getListsCollection();
```

API klíč naleznete v nastavení vašeho účtu v sekci integrace.

# Seznam dostupných metod

Všechny metody mají návratový typ: `array stdClass string`

Pro více informací prosím navštivte dokumentaci naší API: https://ecomailczv2.docs.apiary.io/

### getListsCollection

### addListCollection

### showList

### updateList

### getSubscribers

### getSubscriber

### addSubscriber

### removeSubscriber

### updateSubscriber

### addSubscriberBulk

### listCampaigns

### addCampaign

### updateCampaign

### sendCampaign

### listAutomations

### createTemplate

### listDomains

### createDomain

### deleteDomain

### sendTransactionalEmail

### sendTransactionalTemplate

### createNewTransaction

### triggerAutomation
