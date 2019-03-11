<?php


namespace ISP;


interface IPersonne
{

    public function getAge(): int;

    public function getDateDeNaissance(): \DateTime;

    public function setDateDeNaissance(\DateTime $dateDeNaissance): void;

    public function envoyerEmail(string $message): void;

    public function envoyerSMS(string $message): void;

    public function getNom(): string;

    public function setNom(string $nom): void;

    public function getPrenom(): string;

    public function setPrenom(string $prenom): void;

    public function getTel(): string;

    public function setTel(string $tel): void;

    public function getMail(): string;

    public function setMail(string $mail): void;

}