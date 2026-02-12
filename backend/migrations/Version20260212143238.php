<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260212143238 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE announcement (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, priority VARCHAR(255) NOT NULL, visible_roles VARCHAR(255) NOT NULL, published_at DATETIME NOT NULL, created_by_id INT NOT NULL, INDEX IDX_4DB9D91CB03A8386 (created_by_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE audit_log (id INT AUTO_INCREMENT NOT NULL, module VARCHAR(255) NOT NULL, action VARCHAR(255) NOT NULL, entity_type VARCHAR(255) NOT NULL, entity_id INT NOT NULL, old_value JSON NOT NULL, new_value JSON NOT NULL, ip_address VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, user_id_id INT NOT NULL, INDEX IDX_F6E1C0F59D86650F (user_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE dispatch (id INT AUTO_INCREMENT NOT NULL, planned_volume DOUBLE PRECISION NOT NULL, approved_volume DOUBLE PRECISION NOT NULL, `float` DOUBLE PRECISION NOT NULL, delivered_volume DOUBLE PRECISION NOT NULL, density DOUBLE PRECISION NOT NULL, variance DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, scheduled_at DATETIME NOT NULL, created_at DATETIME NOT NULL, station_id_id INT NOT NULL, supplier_id_id INT NOT NULL, transporter_id_id INT NOT NULL, vehicle_id_id INT NOT NULL, INDEX IDX_8612665A27C2E161 (station_id_id), INDEX IDX_8612665AA65F9C7D (supplier_id_id), INDEX IDX_8612665A22FF4250 (transporter_id_id), INDEX IDX_8612665A1DEB1EBB (vehicle_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE dispatch_unloading (id INT AUTO_INCREMENT NOT NULL, empty_weight DOUBLE PRECISION NOT NULL, loaded_weight DOUBLE PRECISION NOT NULL, net_weight DOUBLE PRECISION NOT NULL, real_quantity DOUBLE PRECISION NOT NULL, variance DOUBLE PRECISION NOT NULL, declaration_number VARCHAR(255) NOT NULL, liquidation_number VARCHAR(255) NOT NULL, driver_name VARCHAR(255) NOT NULL, validated_at DATETIME NOT NULL, dispatch_id_id INT NOT NULL, validated_by_id INT NOT NULL, UNIQUE INDEX UNIQ_4ADB615B51B32391 (dispatch_id_id), INDEX IDX_4ADB615BC69DE5E5 (validated_by_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, installation_date VARCHAR(255) NOT NULL, expected_lifetime INT NOT NULL, station_id_id INT NOT NULL, INDEX IDX_D338D58327C2E161 (station_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE fleet_vehicle (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, type VARCHAR(255) NOT NULL, capacity DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, mileage DOUBLE PRECISION NOT NULL, gps_enabled TINYINT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE fuel_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE fueling_record (id INT AUTO_INCREMENT NOT NULL, vehicle_name VARCHAR(255) NOT NULL, operator_name VARCHAR(255) NOT NULL, quantity DOUBLE PRECISION NOT NULL, start_index DOUBLE PRECISION NOT NULL, end_index DOUBLE PRECISION NOT NULL, variance DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, station_id_id INT NOT NULL, fuel_type_id_id INT NOT NULL, voucher_id_id INT NOT NULL, created_by_id INT NOT NULL, INDEX IDX_7456166A27C2E161 (station_id_id), INDEX IDX_7456166A9EDB5F2E (fuel_type_id_id), INDEX IDX_7456166ABAFFC869 (voucher_id_id), INDEX IDX_7456166AB03A8386 (created_by_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE maintenance_task (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, scheduled_date DATETIME NOT NULL, status VARCHAR(255) NOT NULL, priority VARCHAR(255) NOT NULL, cost DOUBLE PRECISION NOT NULL, completed_at DATETIME NOT NULL, equipment_id_id INT NOT NULL, assigned_technician_id_id INT NOT NULL, INDEX IDX_9D6DBBE9961DBFB3 (equipment_id_id), INDEX IDX_9D6DBBE950C62E01 (assigned_technician_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, planned_volume DOUBLE PRECISION NOT NULL, departure_time DATETIME NOT NULL, arrival_time DATETIME NOT NULL, status VARCHAR(255) NOT NULL, fleet_vehicle_id_id INT NOT NULL, origin_station_id_id INT NOT NULL, destination_station_id_id INT NOT NULL, driver_id_id INT NOT NULL, INDEX IDX_9067F23CFC199A94 (fleet_vehicle_id_id), INDEX IDX_9067F23CED541C9 (origin_station_id_id), INDEX IDX_9067F23C2CA8109B (destination_station_id_id), INDEX IDX_9067F23CFFC6537A (driver_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, read_at DATETIME NOT NULL, created_at DATETIME NOT NULL, user_id_id INT NOT NULL, INDEX IDX_BF5476CA9D86650F (user_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE permission (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE role_permission (id INT AUTO_INCREMENT NOT NULL, role_id_id INT NOT NULL, permission_id_id INT NOT NULL, INDEX IDX_6F7DF88688987678 (role_id_id), INDEX IDX_6F7DF886A9C3F324 (permission_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE station (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE station_alert (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, severity VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, resolved TINYINT NOT NULL, created_at DATETIME NOT NULL, station_id_id INT NOT NULL, INDEX IDX_4F7B39F727C2E161 (station_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE stock_movement (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, json VARCHAR(255) NOT NULL, mov_type VARCHAR(255) NOT NULL, reference_type VARCHAR(255) NOT NULL, reference_id INT NOT NULL, quantity DOUBLE PRECISION NOT NULL, variance DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, station_id_id INT NOT NULL, tank_id_id INT NOT NULL, created_by_id INT NOT NULL, INDEX IDX_BB1BC1B527C2E161 (station_id_id), INDEX IDX_BB1BC1B55F5EA18D (tank_id_id), INDEX IDX_BB1BC1B5B03A8386 (created_by_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE supplier (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, contact_info VARCHAR(255) NOT NULL, contract_document VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE tank (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, capacity_liters DOUBLE PRECISION NOT NULL, current_volume DOUBLE PRECISION NOT NULL, min_threshold DOUBLE PRECISION NOT NULL, max_threshold DOUBLE PRECISION NOT NULL, station_id_id INT NOT NULL, fuel_type_id_id INT NOT NULL, INDEX IDX_AD12B73927C2E161 (station_id_id), INDEX IDX_AD12B7399EDB5F2E (fuel_type_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE technician (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, specialization VARCHAR(255) NOT NULL, certification VARCHAR(255) NOT NULL, availability_status VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE transfer (id INT AUTO_INCREMENT NOT NULL, volume_declared DOUBLE PRECISION NOT NULL, volume_received DOUBLE PRECISION NOT NULL, variance DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, source_station_id_id INT NOT NULL, destination_station_id_id INT NOT NULL, vehicle_id_id INT NOT NULL, INDEX IDX_4034A3C0E2AE3003 (source_station_id_id), INDEX IDX_4034A3C02CA8109B (destination_station_id_id), INDEX IDX_4034A3C01DEB1EBB (vehicle_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE transporter (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, contact_info VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, is_active TINYINT NOT NULL, last_login_at DATETIME NOT NULL, created_at DATETIME NOT NULL, role_id_id INT NOT NULL, station_id_id INT DEFAULT NULL, INDEX IDX_8D93D64988987678 (role_id_id), INDEX IDX_8D93D64927C2E161 (station_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE vehicle (id INT AUTO_INCREMENT NOT NULL, plate_number VARCHAR(255) NOT NULL, capacity DOUBLE PRECISION NOT NULL, type VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, insurance_expiry DATETIME NOT NULL, calibration_expiry DATETIME NOT NULL, transporter_id_id INT NOT NULL, INDEX IDX_1B80E48622FF4250 (transporter_id_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE voucher (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, beneficiary VARCHAR(255) NOT NULL, department VARCHAR(255) NOT NULL, requested_quantity DOUBLE PRECISION NOT NULL, start_index DOUBLE PRECISION NOT NULL, end_index DOUBLE PRECISION NOT NULL, calculated_consumption DOUBLE PRECISION NOT NULL, variance DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, station_id_id INT NOT NULL, fuel_type_id_id INT NOT NULL, approved_by_id INT NOT NULL, INDEX IDX_1392A5D827C2E161 (station_id_id), INDEX IDX_1392A5D89EDB5F2E (fuel_type_id_id), INDEX IDX_1392A5D82D234F6A (approved_by_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE announcement ADD CONSTRAINT FK_4DB9D91CB03A8386 FOREIGN KEY (created_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE audit_log ADD CONSTRAINT FK_F6E1C0F59D86650F FOREIGN KEY (user_id_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE dispatch ADD CONSTRAINT FK_8612665A27C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE dispatch ADD CONSTRAINT FK_8612665AA65F9C7D FOREIGN KEY (supplier_id_id) REFERENCES supplier (id)');
        $this->addSql('ALTER TABLE dispatch ADD CONSTRAINT FK_8612665A22FF4250 FOREIGN KEY (transporter_id_id) REFERENCES transporter (id)');
        $this->addSql('ALTER TABLE dispatch ADD CONSTRAINT FK_8612665A1DEB1EBB FOREIGN KEY (vehicle_id_id) REFERENCES vehicle (id)');
        $this->addSql('ALTER TABLE dispatch_unloading ADD CONSTRAINT FK_4ADB615B51B32391 FOREIGN KEY (dispatch_id_id) REFERENCES dispatch (id)');
        $this->addSql('ALTER TABLE dispatch_unloading ADD CONSTRAINT FK_4ADB615BC69DE5E5 FOREIGN KEY (validated_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D58327C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE fueling_record ADD CONSTRAINT FK_7456166A27C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE fueling_record ADD CONSTRAINT FK_7456166A9EDB5F2E FOREIGN KEY (fuel_type_id_id) REFERENCES fuel_type (id)');
        $this->addSql('ALTER TABLE fueling_record ADD CONSTRAINT FK_7456166ABAFFC869 FOREIGN KEY (voucher_id_id) REFERENCES voucher (id)');
        $this->addSql('ALTER TABLE fueling_record ADD CONSTRAINT FK_7456166AB03A8386 FOREIGN KEY (created_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE maintenance_task ADD CONSTRAINT FK_9D6DBBE9961DBFB3 FOREIGN KEY (equipment_id_id) REFERENCES equipment (id)');
        $this->addSql('ALTER TABLE maintenance_task ADD CONSTRAINT FK_9D6DBBE950C62E01 FOREIGN KEY (assigned_technician_id_id) REFERENCES technician (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CFC199A94 FOREIGN KEY (fleet_vehicle_id_id) REFERENCES fleet_vehicle (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CED541C9 FOREIGN KEY (origin_station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C2CA8109B FOREIGN KEY (destination_station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CFFC6537A FOREIGN KEY (driver_id_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CA9D86650F FOREIGN KEY (user_id_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE role_permission ADD CONSTRAINT FK_6F7DF88688987678 FOREIGN KEY (role_id_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE role_permission ADD CONSTRAINT FK_6F7DF886A9C3F324 FOREIGN KEY (permission_id_id) REFERENCES permission (id)');
        $this->addSql('ALTER TABLE station_alert ADD CONSTRAINT FK_4F7B39F727C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B527C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B55F5EA18D FOREIGN KEY (tank_id_id) REFERENCES tank (id)');
        $this->addSql('ALTER TABLE stock_movement ADD CONSTRAINT FK_BB1BC1B5B03A8386 FOREIGN KEY (created_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE tank ADD CONSTRAINT FK_AD12B73927C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE tank ADD CONSTRAINT FK_AD12B7399EDB5F2E FOREIGN KEY (fuel_type_id_id) REFERENCES fuel_type (id)');
        $this->addSql('ALTER TABLE transfer ADD CONSTRAINT FK_4034A3C0E2AE3003 FOREIGN KEY (source_station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE transfer ADD CONSTRAINT FK_4034A3C02CA8109B FOREIGN KEY (destination_station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE transfer ADD CONSTRAINT FK_4034A3C01DEB1EBB FOREIGN KEY (vehicle_id_id) REFERENCES vehicle (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D64988987678 FOREIGN KEY (role_id_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D64927C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E48622FF4250 FOREIGN KEY (transporter_id_id) REFERENCES transporter (id)');
        $this->addSql('ALTER TABLE voucher ADD CONSTRAINT FK_1392A5D827C2E161 FOREIGN KEY (station_id_id) REFERENCES station (id)');
        $this->addSql('ALTER TABLE voucher ADD CONSTRAINT FK_1392A5D89EDB5F2E FOREIGN KEY (fuel_type_id_id) REFERENCES fuel_type (id)');
        $this->addSql('ALTER TABLE voucher ADD CONSTRAINT FK_1392A5D82D234F6A FOREIGN KEY (approved_by_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE announcement DROP FOREIGN KEY FK_4DB9D91CB03A8386');
        $this->addSql('ALTER TABLE audit_log DROP FOREIGN KEY FK_F6E1C0F59D86650F');
        $this->addSql('ALTER TABLE dispatch DROP FOREIGN KEY FK_8612665A27C2E161');
        $this->addSql('ALTER TABLE dispatch DROP FOREIGN KEY FK_8612665AA65F9C7D');
        $this->addSql('ALTER TABLE dispatch DROP FOREIGN KEY FK_8612665A22FF4250');
        $this->addSql('ALTER TABLE dispatch DROP FOREIGN KEY FK_8612665A1DEB1EBB');
        $this->addSql('ALTER TABLE dispatch_unloading DROP FOREIGN KEY FK_4ADB615B51B32391');
        $this->addSql('ALTER TABLE dispatch_unloading DROP FOREIGN KEY FK_4ADB615BC69DE5E5');
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D58327C2E161');
        $this->addSql('ALTER TABLE fueling_record DROP FOREIGN KEY FK_7456166A27C2E161');
        $this->addSql('ALTER TABLE fueling_record DROP FOREIGN KEY FK_7456166A9EDB5F2E');
        $this->addSql('ALTER TABLE fueling_record DROP FOREIGN KEY FK_7456166ABAFFC869');
        $this->addSql('ALTER TABLE fueling_record DROP FOREIGN KEY FK_7456166AB03A8386');
        $this->addSql('ALTER TABLE maintenance_task DROP FOREIGN KEY FK_9D6DBBE9961DBFB3');
        $this->addSql('ALTER TABLE maintenance_task DROP FOREIGN KEY FK_9D6DBBE950C62E01');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CFC199A94');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CED541C9');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23C2CA8109B');
        $this->addSql('ALTER TABLE mission DROP FOREIGN KEY FK_9067F23CFFC6537A');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CA9D86650F');
        $this->addSql('ALTER TABLE role_permission DROP FOREIGN KEY FK_6F7DF88688987678');
        $this->addSql('ALTER TABLE role_permission DROP FOREIGN KEY FK_6F7DF886A9C3F324');
        $this->addSql('ALTER TABLE station_alert DROP FOREIGN KEY FK_4F7B39F727C2E161');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B527C2E161');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B55F5EA18D');
        $this->addSql('ALTER TABLE stock_movement DROP FOREIGN KEY FK_BB1BC1B5B03A8386');
        $this->addSql('ALTER TABLE tank DROP FOREIGN KEY FK_AD12B73927C2E161');
        $this->addSql('ALTER TABLE tank DROP FOREIGN KEY FK_AD12B7399EDB5F2E');
        $this->addSql('ALTER TABLE transfer DROP FOREIGN KEY FK_4034A3C0E2AE3003');
        $this->addSql('ALTER TABLE transfer DROP FOREIGN KEY FK_4034A3C02CA8109B');
        $this->addSql('ALTER TABLE transfer DROP FOREIGN KEY FK_4034A3C01DEB1EBB');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D64988987678');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D64927C2E161');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E48622FF4250');
        $this->addSql('ALTER TABLE voucher DROP FOREIGN KEY FK_1392A5D827C2E161');
        $this->addSql('ALTER TABLE voucher DROP FOREIGN KEY FK_1392A5D89EDB5F2E');
        $this->addSql('ALTER TABLE voucher DROP FOREIGN KEY FK_1392A5D82D234F6A');
        $this->addSql('DROP TABLE announcement');
        $this->addSql('DROP TABLE audit_log');
        $this->addSql('DROP TABLE dispatch');
        $this->addSql('DROP TABLE dispatch_unloading');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE fleet_vehicle');
        $this->addSql('DROP TABLE fuel_type');
        $this->addSql('DROP TABLE fueling_record');
        $this->addSql('DROP TABLE maintenance_task');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE permission');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE role_permission');
        $this->addSql('DROP TABLE station');
        $this->addSql('DROP TABLE station_alert');
        $this->addSql('DROP TABLE stock_movement');
        $this->addSql('DROP TABLE supplier');
        $this->addSql('DROP TABLE tank');
        $this->addSql('DROP TABLE technician');
        $this->addSql('DROP TABLE transfer');
        $this->addSql('DROP TABLE transporter');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE vehicle');
        $this->addSql('DROP TABLE voucher');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
