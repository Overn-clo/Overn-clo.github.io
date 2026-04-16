<?php session_start();
?>

<?php
function db(): ?PDO
{
    static $db = null;
    if ($db == null) {
        try {
            $db = new PDO(
                'mysql:host=127.0.0.1;dbname=projet_stage_b1;charset=utf8',
                'root',
                '',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (Exception $e) {
            echo "Erreur de connexion à la BDD";
            return null;
        }
    }
    return $db;
}

function queryFetchAll(string $sql, array $params = []): ?array
{
    if ($db = db()) {
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return null;
}

function queryFetchOne(string $sql, array $params = []): ?array
{
    if ($db = db()) {
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }
    return null;
}

function queryExecute(string $sql, array $params = [])
{
    if ($db = db()) {
        $stmt = $db->prepare($sql);
        $result = $stmt->execute($params);
        return $result ?: null;
    }
}
