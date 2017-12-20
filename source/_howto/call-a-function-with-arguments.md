---
extends: _layouts.howto
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Functions
related: call-a-function
---


```javascript
function greetUser(name) {
    return `Welcome ${name} to code to go!`;
}

let result = greetUser('John');

console.log(result);
```
<pre class="output">Welcome John to code to go!</pre>
