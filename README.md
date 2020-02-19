# Observer Pattern
Observer is a behavioral design pattern that allows one objects to notify other objects about changes in their state.

The Observer pattern provides a way to subscribe and unsubscribe to and from these events for any object that implements a subscriber interface.

#Usage examples
PHP has several built-in interfaces (SplSubject, SplObserver) that can be used to make your implementations of the Observer pattern compatible with the rest of the PHP code.

```php
$observable = new PriceObservable();
$observer = new PriceObserver();
$observable->attach($observer);
$observable->changePrice();

Subject: I'm doing something important.
Subject: Price has just changed to: 2
Subject: Notifying observers...
PriceObserver: Reacted to the event.
```
