# Exercici 5 – Miniaplicació PHP + HTML

Miniaplicació feta amb PHP i HTML per practicar variables, condicions,
bucles, arrays i funcions pròpies (Mòdul 0613, Fase 2).

## Estructura

```
exercicis_app/
└── index.php
```

## Què fa

Un formulari demana el nom, l'edat i un número entre 1 i 10. En enviar-lo:

- Valida que cap camp estigui buit i que el número estigui entre 1 i 10
  (si hi ha un error, es mostra en vermell i no es calcula res).
- Diu si l'usuari és major o menor d'edat amb la funció `esMajorEdat($edat)`.
- Mostra la taula de multiplicar del número escollit (bucle `for`).
- Mostra un compte enrere des del número fins a l'1 (bucle `while`).
- Mostra un array de tres notes fixes (`[6, 7.5, 8]`) amb `foreach`.
- Calcula i mostra la mitjana de les notes amb la funció `mitjana($notes)`.

## Com executar-la

### Opció 1: amb l'entorn Docker del curs (php-Laravel)

1. Clona aquest repositori dins de la carpeta `app/` de l'entorn Docker.
2. Aixeca l'entorn:
   ```bash
   make up
   ```
3. Obre al navegador:
   ```
   http://localhost:8000/exercicis_app/index.php
   ```

### Opció 2: amb el servidor integrat de PHP

1. Clona aquest repositori i entra-hi:
   ```bash
   git clone <url-del-repositori>
   cd exercicis_app
   ```
2. Aixeca el servidor de PHP:
   ```bash
   php -S localhost:8000
   ```
3. Obre al navegador:
   ```
   http://localhost:8000/index.php
   ```
4. Per aturar el servidor: `Ctrl+C`.

## Conceptes de PHP aplicats

- Variables i conversió de tipus (`(int)`).
- Condicions (`if` / `elseif` / `else`).
- Bucles `for`, `while` i `foreach`.
- Arrays.
- Funcions pròpies amb paràmetres i retorn (`esMajorEdat()`, `mitjana()`).
- Recollida i validació de dades d'un formulari (`$_SERVER["REQUEST_METHOD"]`, `$_POST`).

## Exemple d'ús

Entrada al formulari:

- Nom: `Joan`
- Edat: `20`
- Número: `4`

Sortida:

```
Hola Joan, tens 20 anys.
Ets major d'edat.

Taula del 4:
4 x 1 = 4
...
4 x 10 = 40

Compte enrere:
4 3 2 1

Les notes són:
6 7.5 8

La mitjana de les notes és: 7.17
```
