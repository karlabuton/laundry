<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Item_slotModel;

class ItemandslotController extends Controller
{
    public $dbitems;
    public function __construct()
    {
        helper('form');
        $this->dbitems = new Item_slotModel();
    }


    public function items()
    {
        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbitems->getLoggedInUserData($admin);
        $data['data_items'] = $this->dbitems->getItem();

        return view("itemandslot/itemandslot", $data);
    }
    public function additems()
    {
        $session = \CodeIgniter\Config\Services::session();

        // Check if a file was uploaded
        if ($this->request->getFile('txt_image')) {
            $file = $this->request->getFile('txt_image');

            // Generate a random name for the file
            $newName = $file->getRandomName();

            // Check if the file is valid and move it to the uploads directory
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move(ROOTPATH . 'public/uploads', $newName);

                $item_avail = $this->request->getVar('item_avail');
                $item_price = $this->request->getVar('item_price');

                // Save form data along with the file name to the database
                $data = [
                    'txt_image' => $newName,
                    'item_avail' => $item_avail,
                    'item_price' => $item_price,
                ];

                // Insert data into the database
                $this->dbitems->additems($data);

                // Set success message
                $session->setTempdata('success', 'Item added successfully!', 3);
            } else {
                // Set error message if file upload failed
                $session->setTempdata('error', 'Failed to upload image!', 3);
            }
        } else {
            // Set error message if no file uploaded
            $session->setTempdata('error', 'No file uploaded!', 3);
        }

        // Redirect back to the items page
        return redirect()->to(base_url() . "ItemandslotController/items");
    }


    public function editItems($id)
    {

        $session = \CodeIgniter\Config\Services::session();

        // Check if a file was uploaded
        if ($this->request->getFile('txt_image')) {
            $file = $this->request->getFile('txt_image');

            // Generate a random name for the file
            $newName = $file->getRandomName();

            // Check if the file is valid and move it to the uploads directory
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move(ROOTPATH . 'public/uploads', $newName);

                $item_avail = $this->request->getVar('item_avail');
                $item_price = $this->request->getVar('item_price');

                // Save form data along with the file name to the database
                $data = [
                    'txt_image' => $newName,
                    'item_avail' => $item_avail,
                    'item_price' => $item_price,
                ];

                // Insert data into the database
                $this->dbitems->edititemslot($data, $id);

                // Set success message
                $session->setTempdata('success', 'Item added successfully!', 3);
            } else {
                // Set error message if file upload failed
                $session->setTempdata('error', 'Failed to upload image!', 3);
            }
        } else {
            // Set error message if no file uploaded
            $session->setTempdata('error', 'No file uploaded!', 3);
        }

        // Redirect back to the items page
        return redirect()->to(base_url() . "ItemandslotController/items");
    }
    public function Edit($Itemid)
    {

        $admin = session()->get('logged_admin');
        $data['userdata'] = $this->dbitems->getLoggedInUserData($admin);
        $data['data_items'] = $this->dbitems->getItemss($Itemid);

        return view("itemandslot/edititems", $data);
    }

    public function deleteitems($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->dbitems->deleteitem($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "ItemandslotController/items");
        }
    }
}
