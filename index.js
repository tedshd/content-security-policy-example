/**
 *
 * @authors Ted Shiu (ted@sitetag.us)
 * @date    2016-09-19 12:29:37
 */

console.log('load js');

document.querySelector('a').addEventListener('click', function (e) {
    e.preventDefault();
    console.log('click!');
})