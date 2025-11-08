# plk-popup-plugin
Popop plugin til: Storyscaping eksamen del. 2


# Kaffe Gåture – Popup☕

Et simpelt og brugervenligt WordPress-plugin, der viser et popup-vindue med et billede og en knap, som linker til en valgfri side.
Perfekt til kampagner, events eller sociale medier — fx “Følg os på Instagram”.


## Funktioner

- Popup-vindue med billede og knap
- Kan indsættes hvor som helst via shortcode
- Responsivt design (CSS inkluderet)
- Luk via klik udenfor, luk-knap eller tast ESC
- Kompatibel med Elementor og andre sidebyggere
- Nem tilpasning via shortcode-attributter


## Installation

1. Download eller opret mappen kaffe-gaatur i /wp-content/plugins/.

2. Tilføj følgende filer og mapper:

```
kaffe-gaatur/
├── css/
│   └── style.css
├── js/
│   └── script.js
├── img/
│   └── kaffe-gaatur.png
├── php/
│   └── kaffe-gaatur-popup.php
└── README.md
```

3. Aktivér plugin’et i WordPress under Plugins > Aktiver.

4. Indsæt shortcode’en hvor du vil vise popup’en.


## Shortcode

Brug følgende shortcode i indlæg, sider eller widgets:
[kaffe_gaature_popup]

### Valgfrie attributter

| Attribut | Standardværdi | Beskrivelse |
|-----------|----------------|-------------|
| `img` | `img/kaffe-gaature.png` | Sti til popup-billede |
| `alt` | `"Kaffe Gåture – program"` | Alternativ tekst for billedet |
| `link` | `"https://www.instagram.com/peterlarsenkaffe/"` | URL som knappen peger på |
| `label` | `"Følg med os på Instagram"` | Tekst på knappen |

### Eksempel:
```
[kaffe_gaature_popup 
 img="https://ditdomaene.dk/wp-content/uploads/promo.jpg"
 alt="Kampagnebillede"
 link="https://ditlink.dk"
 label="Læs mere her"] 
 ```

## Filbeskrivelser
### PHP – kaffe-gaatur-popup.php
- Registrerer plugin’et.
- Indlæser CSS og JS.
- Indeholder shortcode-funktionaliteten.

### CSS – style.css
- Definerer udseende for popup, knap og overlay.
- Sikrer responsivitet og flot design.

### JavaScript – script.js
- Viser popup automatisk efter 2 sekunder.
- Lukker popup via klik, ESC eller knap.


## Tilpasning

Du kan ændre farver, knapstørrelse og animationer i css/style.css.
Popup-timing (nu 2 sekunder) justeres i js/script.js:
```
setTimeout(function () {
  $("#kg-popup-container").removeClass("kg-hidden");
}, 2000);
```

Ændr 2000 til et andet antal millisekunder (fx 5000 for 5 sekunder).


## Licens

Dette plugin er udgivet under GPL2+-licensen.
Du må frit ændre og distribuere det, så længe samme licens bibeholdes.

#### Udviklet af: Ingi
Version: 1.2.0

📍 Brug shortcode: [kaffe_gaature_popup]
