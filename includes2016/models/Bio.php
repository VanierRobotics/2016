<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2016-02-03
 * Time: 7:40 PM
 */
class _Bio extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getBios($lang, $team)
    {
        $query = "SELECT
                      bio_FullName,
                      bio_Image,
                      bio_GOTName,
                      bio_Challenges,
                      bio_Experience
                    FROM bios
                      JOIN team_lookup
                        ON bios.bio_TeamID = team_lookup.team_ID
                      JOIN language_lookup
                        ON bios.bio_Lang = language_lookup.lang_ID
                    WHERE team_Name LIKE :team
                          AND lang_Abreviation LIKE
                          :lang
                          AND bios.bio_Image NOT LIKE '%Captain%'";

        return $this->db->select($query, [':team' => $team, ':lang' => $lang]);
    }

    public function getCaptainBio($lang, $team)
    {
        $query = "SELECT
                      bio_FullName,
                      bio_Image,
                      bio_GOTName,
                      bio_Challenges,
                      bio_Experience
                    FROM bios
                      JOIN team_lookup
                        ON bios.bio_TeamID = team_lookup.team_ID
                      JOIN language_lookup
                        ON bios.bio_Lang = language_lookup.lang_ID
                    WHERE team_Name LIKE :team
                          AND lang_Abreviation LIKE
                          :lang
                          AND bios.bio_Image LIKE '%Captain%'";

        return $this->db->select($query, [':team' => $team, ':lang' => $lang]);
    }

}