<?php
// app/Http/Controllers/FirmEnquiryController.php
namespace App\Http\Controllers;

use App\Models\FirmEnquiry;
use Illuminate\Http\Request;

class FirmEnquiryController extends Controller
{
    // Show the form
    public function create()
    {
        return view('frontend.pages.firm-enquiry-create');
    }

    // Handle submission
    public function store(Request $request)
    {
        $data = $request->validate([
            'firm_name' => 'required|string|max:255',
            'website'   => 'nullable|url|max:255',
            'address'   => 'required|string',
            'message'   => 'required|string',
        ]);

        FirmEnquiry::create($data);

        return redirect()
            ->route('firm-enquiry.create')
            ->with('success','Your enquiry has been saved.');
    }

    // List all submissions
    public function index()
    {
        $all = FirmEnquiry::latest()->paginate(20);
        return view('frontend.pages.firm-enquiry-list', compact('all'));
    }
}
