---
extends: _layouts.howto
date: 2017-12-18
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/decodeURIComponent
---


```javascript
const search = 'hello%20world%3F';

decodeURIComponent(search);
```
<pre class="output">
hello world?
</pre>
