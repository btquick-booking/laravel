// Scripts for firebase and firebase messaging
importScripts("https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js");
importScripts(
    "https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js"
);

// Initialize the Firebase app in the service worker
// "Default" Firebase configuration (prevents errors)
const defaultConfig = {
    apiKey: true,
    projectId: true,
    messagingSenderId: true,
    appId: true,
};

const firebaseConfig = {
    apiKey: "AIzaSyCbU5MxPhmihkyyPm6yjuNJlFFGxh4TdIg",
    authDomain: "maesam-cf0b1.firebaseapp.com",
    projectId: "maesam-cf0b1",
    storageBucket: "maesam-cf0b1.appspot.com",
    messagingSenderId: "1050071250120",
    appId: "1:1050071250120:web:bf3a2b4de23f4fe6c9e1fd",
    measurementId: "G-Z3VEDNKP8G"
  };


firebase.initializeApp(firebaseConfig);

// Retrieve firebase messaging
const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
    const notificationTitle = payload.notification.title;
    const notificationOptions = {
        body: payload.notification.body,
        icon: payload.notification.image,
    };

    self.registration.showNotification(notificationTitle, notificationOptions);
});
