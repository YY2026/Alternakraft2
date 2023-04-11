<?php
class crud
{
    //private database object
    private $db;

    //constructor to initialize private variable to the databasse connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insertHouseholds($email, $postal_code, $square_footage, $household_type, $heating_setting, $cooling_setting)
    {
        try {
            //define sqql statement to be exxecuted
            $sql = "INSERT INTO household (email,postal_code,square_footage,household_type,heating_setting,cooling_setting) VALUES (:email,:postal_code,:square_footage,:household_type,:heating_setting,:cooling_setting)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            //bind all placeholders to the actual values
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':postal_code', $postal_code);
            $stmt->bindparam(':square_footage', $square_footage);
            $stmt->bindparam(':household_type', $household_type);
            $stmt->bindparam(':heating_setting', $heating_setting);
            $stmt->bindparam(':cooling_setting', $cooling_setting);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    // public function insertAppliance($email, $postal_code, $square_footage, $household_type, $heating_setting, $cooling_setting)
    // {
    //     try {
    //         //define sqql statement to be exxecuted
    //         $sql = "INSERT INTO household (email,postal_code,square_footage,household_type,heating_setting,cooling_setting) VALUES (:email,:postal_code,:square_footage,:household_type,:heating_setting,:cooling_setting)";
    //         //prepare the sql statement for execution
    //         $stmt = $this->db->prepare($sql);
    //         //bind all placeholders to the actual values
    //         $stmt->bindparam(':email', $email);
    //         $stmt->bindparam(':postal_code', $postal_code);
    //         $stmt->bindparam(':square_footage', $square_footage);
    //         $stmt->bindparam(':household_type', $household_type);
    //         $stmt->bindparam(':heating_setting', $heating_setting);
    //         $stmt->bindparam(':cooling_setting', $cooling_setting);

    //         $stmt->execute();
    //         return true;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }
    // public function editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty)
    // {
    //     try {
    //         $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,
    //         `emailaddress`=:email,`contactnumber`=:contact,`specialty_id`=:specialty WHERE attendee_id = :id";

    //         $stmt = $this->db->prepare($sql);
    //         //bind all placeholders to the actual values
    //         $stmt->bindparam(':id', $id);
    //         $stmt->bindparam(':fname', $fname);
    //         $stmt->bindparam(':lname', $lname);
    //         $stmt->bindparam(':dob', $dob);
    //         $stmt->bindparam(':email', $email);
    //         $stmt->bindparam(':contact', $contact);
    //         $stmt->bindparam(':specialty', $specialty);

    //         $stmt->execute();
    //         return true;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }

    public function getAppliances()
    {
        try {
            $sql = "SELECT * FROM `appliance`;";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
        public function getHouseholds()
    {
        try {
            $sql = "SELECT * FROM `household`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    // public function getAttendeeDetail($id)
    // {
    //     try {
    //         $sql = "select * from attendee a inner join specialities s on a.specialty_id = s.specialty_id
    //         where attendee_id = :id";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->bindparam(':id', $id);
    //         $stmt->execute();
    //         $result = $stmt->fetch();
    //         return $result;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }

    public function deleteAppliance($id)
    {
        try {
            $sql = "delete from attendee where attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function deleteGenerator($id)
    {
        try {
            $sql = "delete from attendee where attendee_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getManufacturers()
    {
        try {
            $sql = "SELECT distinct manufacturer_name FROM `manufacturer` ;";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getGenerators()
    {
        try {
            $sql = "SELECT distinct manufacturer_name FROM `manufacturer` ;";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
