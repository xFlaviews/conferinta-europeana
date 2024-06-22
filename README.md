# Conferinta Europeana

## Comandi da lanciare

```shell

# Per chiudere i container docker
docker-compose down

# Per avviare i container docker
docker-compose up -d

# Per compilara composer 
composer install

# Per aggiornare pacchetti composer
composer update

# Se si hanno problemi con le viste della pagina che non caricano nuovo contenuto
php artisan optimize:clear

# Se mancano tabelle database !!! Questo va lanciato da console del container docker
php artisan migrate

# Se si deve ricrecere tutte le tabelle database !!! Questo va lanciato da console del container docker
php artisan migrate:fresh

# Per installare pacchetti Node
npm install

# Per compilare javascritp e pubblicare immagini e font
npm run build

```

## Impostazioni .ENV
```conf

# Per nascondere la barra di dev, diattivare in questo modo
DEBUGBAR_ENABLED=false

```

### Comandi Node

```shell
npm i

# si consiglia di lanciare questo
npm run build

# sconsigliato, chiede tanto tempo di copilazione
npm run dev
```