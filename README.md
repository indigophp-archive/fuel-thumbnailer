# Fuel-Thumbnailer
__Létrehozta:__ Barta Tamás <barta.tamas.d@gmail.com>
__Létrehozva:__ 2012.09.11.

A csomag betöltése után az egyetlen szükséges konfigurációnak a routes.php-ban van a helye. Be kell állítani, hogy a `Controller_Thumbnailer` kapja a kívánt urlről a kérést, és a paramétereket.

#### Példa

```php
<?php
return array(
	'kicsi/(:any)'  => 'thumbnailer/index/$1',
);
```

Ezek beállítása után ha egy képnek a bélyegképét akarjuk használni, akkor csak az URL-je elé kell rakni, hogy `kicsi/150x100/`, azaz az URL-t, amit választottunk, és a bélyegkép dimenzióit.
Az arány megtartása nem kötelező, a vágásokat is kezeli a kontroller.
