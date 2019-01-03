# Implementing Command Pattern in PHP

We will try to lock the door if it is open of unlock the door if it is locked. Image you are in the 
home and you want to lock the doors without getting out of your bed. We will implement exactly this
case with Command Pattern.

As always I use composer for autoloading and we have an index.php to implement our code:

    #create a lock
    $lock = new Lock();
    #create a key
    $key = new Key();
    #tell key to lock the lock or vice versa.
    $onCommand = new OnCommand($lock);
    $key->execute($onCommand);

Result: Door is locked.

    ...
    $key->execute($onCommand);
    $key->execute($onCommand);

Result: Door is locked. Door is unlocked.

You command the key to lock the door and you see a message on your phone screen tells you that
'Door is unlocked. ', then you give one more command and 'Door is locked.'

Now, we remember that we also have a backdoor which needs to be programmed so that we can open/close
it from the app on our phone. 

We create another class named BackDoorLock. Here we have a small problem: When initializing
OnCommand class we put Lock object as a parameter, meaning parameter should be an instance of
Lock() object, so in index.php file we cannot send new OnCommand($backdoorLock) because backdoorLock
is an instance of BackDoorLock object. So, we create LockInterface, so both Lock and BackDoorLock
object implements it. Then we change Lock object in OnCommand's construct and tell that just 
make sure that you get any sort of lock object, instead of exactly one kind of lock object(which 
was a Lock() initially.). Now we are good to go.

    $lock = new Lock();
    $key = new Key();
    $onCommand = new OnCommand($lock);
    $key->execute($onCommand);
    
    $backdoorLock = new BackDoorLock();
    $onCommand = new OnCommand($backdoorLock);
    $key->execute ($onCommand);
    
And the result is: Door is locked. Backdoor is locked.

The beauty here is you can define your own mechanism of locking and unlocking doors for each locks.
For example, on our BackDoorLock() class we can simplify things and use it to only lock the door,
it is all about your fantasy how to implement this pattern.

#### Note:
It can look like a little weird to use this pattern alone in our case above. But the main issue is
to know how to use it. In general you don't want to use Command Pattern just for this case. But
if you think of using this pattern with other patterns in composition, it is a great way to solve
common design problems.
