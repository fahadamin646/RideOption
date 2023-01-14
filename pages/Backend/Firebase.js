const firebaseConfig = {
    apiKey: "AIzaSyBOYMoVOYqMd1CHuNM4UHxNC-nZrW0xJUc",
    authDomain: "fast-ride-90290.firebaseapp.com",
    databaseURL: "https://fast-ride-90290-default-rtdb.firebaseio.com",
    projectId: "fast-ride-90290",
    storageBucket: "fast-ride-90290.appspot.com",
    messagingSenderId: "105175282420",
    appId: "1:105175282420:web:831726b13e69ace711a4a1",
    measurementId: "G-V53R6TFR2F",
};
firebase.initializeApp(firebaseConfig);

// Reference to the data in the Firebase Realtime Database
// var dataRef = firebase.database().ref("users");

// Function to fetch data from Firebase
async function fetchData(table) {
    const database = firebase.database();
    const dataRef = database.ref(`/${table}`);

    // Fetch the data from the Realtime Database
    const snapshot = await dataRef.once("value");
    const data = snapshot.val();

    // Convert the data into a list of objects
    const objectList = Object.keys(data).map((key) => {
        return {
            id: key,
            ...data[key],
        };
    });

    return objectList;
}