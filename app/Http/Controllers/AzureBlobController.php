<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AzureBlobController extends Controller
{
    public function index()
    {
        return view('azure'); // simple Blade with buttons
    }

    // Create a test file directly in Azure Blob Storage
    public function createTestFile()
    {
        $filename = 'provider.txt';
        $content = 'Hello Azure Blob!';

        Storage::disk('azure')->write($filename, $content);

        return back()->with('success', "$filename created successfully.");
    }

    // Delete the test file
    public function deleteTestFile()
    {
        $filename = 'provider.txt';
        Storage::disk('azure')->delete($filename);

        return back()->with('success', "$filename deleted successfully.");
    }
}
