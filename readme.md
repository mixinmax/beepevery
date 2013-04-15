# BeepEvery

_interval beeping and self-serving website -- all in one!_

## Why?

I decided to make BeepEvery when I needed a way to timebox a workout routine and had nothing to do
over the weekend. Its rough around the edges, but serves its purpose.

## Uses

- Timebox your development or work. Set the timer to `30m` to do some work sprints and take breaks in between.
- Time your workouts and cardio routines. The beep can notify you when its time to change workouts.
- Time your studying. Instead of having something going on in the background (like Stargate), timebox your studying for short `15m` sprints with breaks in between.

## Usage

The time format accepted in the input box is as follows: `[xx]h[xx]m[xx]s`. For example:

    3h2m8s     // beep every 3 hours, 2 minutes and 8 seconds
    15m        // beep every 15 minutes
    42s        // beep every 42 seconds

Start the timer by pressing `START`. You can pause it with `PAUSE` and when you `CONTINUE` the beep process will keep going from where it left off. `RESET` will clear the beeper and allow you to enter a new time.

If you're using small time increments (entering `1s` for example), you might find a lag before the first beep is invoked. I'm currently trying to fix it, feel free to help.

## Bugs

There are a couple outstanding issues and enhancements I wanted to complete but didn't have the time. I'd be overjoyed if someone found this thing interesting enough to fork. I'll happy accept working pull requests.

## Credits

Hooray for [these people](credit.md) who let me use their stuff!
