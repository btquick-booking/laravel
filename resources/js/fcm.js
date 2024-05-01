import { initializeApp } from "firebase/app";

import { getMessaging, getToken, onMessage } from "firebase/messaging";

//Firebase Config values imported from .env file
const firebaseConfig = {
    apiKey: import.meta.env.VITE_APP_API_KEY,
    authDomain: import.meta.env.VITE_APP_AUTH_DOMAIN,
    projectId: import.meta.env.VITE_APP_PROJECT_ID,
    storageBucket: import.meta.env.VITE_APP_STORAGE_BUCKET,
    messagingSenderId: import.meta.env.VITE_APP_MESSAGING_SENDER_ID,
    appId: import.meta.env.VITE_APP_APP_ID,
    measurementId: import.meta.env.VITE_APP_MEASUREMENT_ID,
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

export async function requestPermission() {
    //requesting permission using Notification API
    const permission = await Notification.requestPermission();

    if (permission === "granted") {
        const token = await getToken(messaging, {
            vapidKey: import.meta.env.VITE_APP_VAPID_KEY,
        });

        await axios.post('fcm_token', { token: token })
        console.log("Token generated : ", token);
    } else if (permission === "denied") {
        //notifications are blocked
        alert("You denied for the notification");
    }
}

// Messaging service
export const messaging = getMessaging(app);

onMessage(messaging, (payload) => {
    const { title, body } = payload.notification;
    console.log(title)
    new FilamentNotification()
    .title(title)
    .success()
    .body(body)
    .send();
})
