<?php

$conn = new PDO("mysql:host=localhost;dbname=testdb", "root", "");

function createUser($name, $email)
{
    global $conn;

    $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email]);
}

function readUsers()
{
    global $conn;

    $stmt = $conn->query("SELECT * FROM users");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateUser($id, $name, $email)
{
    global $conn;

    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $id]);
}

function deleteUser($id)
{
    global $conn;

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
}

createUser("Anuj", "anuj@gmail.com");

$users = readUsers();

updateUser(1, "Anuj Ghimire", "anuj@gmail.com");

deleteUser(1);
