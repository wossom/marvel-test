# Marvel Client

Our company want to create a console app and a web client to retrieve information about Marvel Characters (we are big fans).

We want a console application that has the next commands:

- `marvel:characters`. Lists all the Marvel characters
- `marvel:character <id>`. Shows information about a single Marvel character.
- `marvel:character-comics <id>`. Shows the comics of a single Marvel character.
- `marvel:comic <id>`. Shows information about a single Marvel comic.
- `marvel:comic-authors <id>`. Shows the authors of a single Marvel comic.

Also, we want a web version of this client, so we want the next pages:

- `/characters`. Shows a list will marvel characters
- `/characters/<id>`. Shows information about a single Marvel character.
- `/characters/<id>/comics`. Shows the comics of a single Marvel character.
- `/comics/<id>`. Shows information about a single Marvel comic.
- `/comics/<id>/authors`. Shows the authors of a single Marvel comic.

All this content will be rendered in HTML. You can use the domain `http://marvel.wossom.com/`.

You can get all the information related with Marvel from their [public API](https://developer.marvel.com/docs).

## You must
- Ensure that you reuse as much code as you can in an appropriate manner.
- Validate all the inputs, both console and web.
- Handle properly errors, from the API, the console input and the web.

## You should
- Follow PSR-12 standards.
- Ensure your code will follow as many SOLID principles as can.
- Your code is easy to understand how it works and is easier to work with.

## What we value the most?
- Understandable code.
- Usage of known patterns.
- Good naming.
- SOLID principles.
- Automated testing.

## Extra
- Pagination on the list views
- Ordering on the list views
- Add user and password to access to the web views

