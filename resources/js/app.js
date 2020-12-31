require('./bootstrap');

require('alpinejs');

Echo.private('App.Models.User.' + '045c5063-a8de-44be-b0bb-7501362ea107')
    .listen('.application.archived', (e) => {
        console.log(e)
    })
    .listen('.application.unarchived', (e) => {
        console.log(e)
    })
    .listen('.application.paused', (e) => {
        console.log(e)
    })
    .listen('.application.online', (e) => {
        console.log(e)
    })
    .listen('.application.pinned', (e) => {
        console.log(e)
    })
    .listen('.application.unpinned', (e) => {
        console.log(e)
    })
    .notification((notification) => {
        console.log(notification);
    });
