<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
        [
            'username' => 'user1g@gmail.com',
            'password' => bcrypt('user11'),
        ],
        [
            'username' => 'user2@gmail.com',
            'password' =>  bcrypt('user1212'),
        ],
        ]);

        DB::table('pusris')->insert([
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.1',
            'activities' => 'Define processes, inputs, outputs and responsibilities for the financial management and accounting of I&T in alignment with the enterprise budgeting and cost accounting policies and approach. Define how to analyze and report (to whom and how) on the I&T budget control process',
            'evidence' => 'Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI',
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.1',
            'activities' => 'Define a classification scheme to identify all I&T-related cost elements (capital expenditures [capex] vs. operational expenses [opex], hardware, software, people, etc.). Identify how they are captured',
            'evidence' => 'Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI ITMP 2020-2024',
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.2',
            'activities' => 'Rank all I&T initiatives and budget requests based on business cases and strategic and tactical priorities. Establish procedures to determine budget allocations and cutoff.',
            'evidence' => 'Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI
            Resume Usulan Anggaran Strategis 2022 di Si ANIN
            ITMP 2020-2024',
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.2',
            'activities' => '- Allocate business and IT resources (including external service providers) within the high-level budget allocations for I&T enabled programs, services and assets. 
            - Consider the options for buying or developing capitalized assets and services vs. externally utilized assets and services on a pay-for-use basis.',
            'evidence' => 'Anggaran per program kerja/insiatif dalam TI
            Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI',
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.3',
            'activities' => 'Document the rationale to justify contingencies and review them regularly.',
            'evidence' => 'simrisk',             
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.3',
            'activities' => 'Instruct process, service and program owners, as well as project and asset managers, to plan budgets.',
            'evidence' => 'Struktur Organisasi TI
             Prosedur Penyusunan RKAP TI',              
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.5',
            'activities' => 'Obtain approval of key stakeholders and communicate the I&T costing model to the management of user departments.',
            'evidence' => 'RKAP Divisi TI',              
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.5',
            'activities' => 'Establish time scales for the operation of the cost management process in line with budgeting and accounting requirements and timeline.',
            'evidence' => 'RKAP Divisi TI',              
            ],
            [
            'project_id' => '1',
            'code_id' => '1',
            'practice_code' => 'apo06.5',
            'activities' => 'Define a method for the collection of relevant data to identify deviations in budget vs. actuals, investment ROI, service cost trends, etc.',
            'evidence' => 'PSI DENDI',              
            ],
            [
            'project_id' => '2',
            'code_id' => '17',
            'practice_code' => 'apo06.2',
            'activities' => 'Establish a procedure to communicate budget decisions and review them with the business unit budget holders.',
            'evidence' => 'Aplikasi Si ANIN
            Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI',
            ],
            [
            'project_id' => '2',
            'code_id' => '17',
            'practice_code' => 'apo06.1',
            'activities' => 'Define processes, inputs, outputs and responsibilities for the financial management and accounting of I&T in alignment with the enterprise budgeting and cost accounting policies and approach. Define how to analyze and report (to whom and how) on the I&T budget control process',
            'evidence' => 'Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI',
            ],
            [
            'project_id' => '2',
            'code_id' => '17',
            'practice_code' => 'apo06.1',
            'activities' => 'Define processes, inputs, outputs and responsibilities for the financial management and accounting of I&T in alignment with the enterprise budgeting and cost accounting policies and approach. Define how to analyze and report (to whom and how) on the I&T budget control process',
            'evidence' => 'Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI',
            ],
            [
            'project_id' => '2',
            'code_id' => '17',
            'practice_code' => 'apo06.1',
            'activities' => 'Define a classification scheme to identify all I&T-related cost elements (capital expenditures [capex] vs. operational expenses [opex], hardware, software, people, etc.). Identify how they are captured',
            'evidence' => 'Prosedur Penyusunan RKAP dan Program Kerja Tahunan TI ITMP 2020-2024',          
            ],
            [
            'project_id' => '1',
            'code_id' => '3',
            'practice_code' => 'apo09.3',
            'activities' => 'Determine, agree on and document internal operational agreements to underpin the customer service agreements, if applicable.',
            'evidence' => 'Service Level Agreement, IT Service Catalog',
            ],
            [
            'project_id' => '1',
            'code_id' => '2',
            'practice_code' => 'apo07.1',
            'activities' => 'Evaluate staffing requirements on a regular basis or upon major changes. Ensure that both the enterprise and the IT function have sufficient resources to support enterprise goals and objectives, business processes and controls, and I&T enabled initiatives adequately and appropriately.',
            'evidence' => 'Prosedur Terkait SDM dan Pelatihan TI, meliputi :
            - rekrutmen dan pengangkatan
            - penilaian karyawan (360 dan KPI)
            - manajemen talenta
            - pelatihan',         
            ],
            [
            'project_id' => '2',
            'code_id' => '18',
            'practice_code' => 'apo07.1',
            'activities' => 'Evaluate staffing requirements on a regular basis or upon major changes. Ensure that both the enterprise and the IT function have sufficient resources to support enterprise goals and objectives, business processes and controls, and I&T enabled initiatives adequately and appropriately.',
            'evidence' => 'Prosedur Terkait SDM dan Pelatihan TI, meliputi :
                - rekrutmen dan pengangkatan
                - penilaian karyawan (360 dan KPI)
                - manajemen talenta
                - pelatihan',
            ],
            [
            'project_id' => '1',
            'code_id' => '3',
            'practice_code' => 'apo09.3',
            'activities' => 'Determine, agree on and document internal operational agreements to underpin the customer service agreements, if applicable.',
            'evidence' => 'Service Level Agreement, IT Service Catalog',
            ],
            [
            'project_id' => '1',
            'code_id' => '4',
            'practice_code' => 'apo10.1',
            'activities' => 'Continuously scan the enterprise landscape in search for new partners and vendors that can provide complementary capabilities and support the realization of the I&T strategy, road map an enterprise objectives.',
            'evidence' => 'Prosedur Pengelolaan Pihak Ketiga Teknologi Informasi
            Daftar Vendor, Formulir Penilaian Pihak Ketiga',
            ],
            [
                'project_id' => '1',
                'code_id' => '4',
                'practice_code' => 'apo10.2',
                'activities' => 'Obtain legal advice on resource development acquisition agreements regarding ownership and licensing of IP.',
                'evidence' => 'Interview',
                ],
                [
                'project_id' => '1',
                'code_id' => '5',
                'practice_code' => 'bai02.1',
                'activities' => 'Ensure that all stakeholder requirements, including relevant acceptance criteria, are considered, captured, prioritized and recorded in a way that is understandable to all stakeholders, recognizing that the requirements may change and will become more detailed as they are implemented.',
                'evidence' => 'Business Requirement Document for Sistem Input Penerimaan dan Pengeluaran Dokumen PT Pupuk Sriwijaya Palembang'
                ],
                [
                'project_id' => '1',
                'code_id' => '5',
                'practice_code' => 'bai02.2',
                'activities' => 'Review the alternative solutions with all stakeholders. Select the most appropriate one based on feasibility criteria, including risk and cost',
                'evidence' => 'Business Requirement Document for Sistem Input Penerimaan dan Pengeluaran Dokumen PT Pupuk Sriwijaya Palembang',
            ],
            [
                'project_id' => '1',
                'code_id' => '6',
                'practice_code' => 'bai03.1',
                'activities' => 'Establish a high-level design specification that translates the proposed solution into a high-level design for business processes, supporting services, workflows, applications, infrastructure, and information repositories capable of meeting business and enterprise architecture requirements.',
                'evidence' => 'Business Requirement Document for Sistem Input Penerimaan dan Pengeluaran Dokumen PT Pupuk Sriwijaya Palembang'
                ],
                [
                'project_id' => '1',
                'code_id' => '6',
                'practice_code' => 'bai03.3',
                'activities' => 'Document all solution components according to defined standards. Maintain version control over all developed components and associated documentation.',
                'evidence' => 'Interview',
                ],
                [
                'project_id' => '1',
                'code_id' => '7',
                'practice_code' => 'bai04.1',
                'activities' => 'Consider the following (current and forecasted) in the assessment of availability, performance and capacity of services and resources: customer requirements, business priorities, business objectives, budget impact, resource utilization, IT capabilities and industry trends.',
                'evidence' => 'Prosedur Pengelolaan Kapasitas Infrastruktur TI'
            ],  
            [
                'project_id' => '1',
                'code_id' => '7',
                'practice_code' => 'bai04.5',
                'activities' => 'Obtain guidance from vendor product manuals to ensure an appropriate level of performance availability for peak processing and workloads.',
                'evidence' => 'Guide manual dari vendor',
                ],
                [
                'project_id' => '1',
                'code_id' => '8',
                'practice_code' => 'bai06.1',
                'activities' => 'Use formal change requests to enable business process owners and IT to request changes to business process, infrastructure, systems or applications. Make sure that all such changes arise only through the change request management process.',
                'evidence' => 'Prosedur Pengendalian Perubahan Teknologi Informasi'
                ],
                [
                'project_id' => '1',
                'code_id' => '8',
                'practice_code' => 'bai06.1',
                'activities' => 'Plan and schedule all approved changes.',
                'evidence' => 'Change Request Form. Monitoring change request pada Aplikasi Tuleap',
                ],
                [
                'project_id' => '1',
                'code_id' => '9',
                'practice_code' => 'bai07.1',
                'activities' => 'Create an implementation plan that reflects the broad implementation strategy, the sequence of implementation steps, resource requirements, inter-dependencies, criteria for management acceptance of the production implementation, installation verification requirements, transition strategy for production support, and update of business continuity plans.',
                'evidence' => 'Business Requirement Document for Sistem Input Penerimaan dan Pengeluaran Dokumen PT Pupuk Sriwijaya Palembang
                Berita Acara Klarifikasi Teknis Pengadaan Jasa Redesign Website (dengan pihak ketiga)'
        ],
        [
            'project_id' => '1',
            'code_id' => '9',
            'practice_code' => 'bai07.4',
            'activities' => 'Ensure that the test environment is representative of the future business and operational landscape. Include business process procedures and roles, likely workload stress, operating systems, necessary application software, database management systems, and network and computing infrastructure found in the production environment.',
            'evidence' => 'Test Scenario Aplikasi Suppermen',
            ],
            [
            'project_id' => '1',
            'code_id' => '10',
            'practice_code' => 'bai10.2',
            'activities' => 'Identify and classify CIs and populate the repository.',
            'evidence' => '-Instruksi Kerja Pengelolaan Konfigurasi TI PSP
            -Working Paper Dokumentasi CMDB PSP - LINDA '
            ],
            [
            'project_id' => '1',
            'code_id' => '10',
            'practice_code' => 'bai10.2',
            'activities' => 'Identify and classify CIs and populate the repository.',
            'evidence' => '-Instruksi Kerja Pengelolaan Konfigurasi TI PSP
            -Working Paper Dokumentasi CMDB PSP - LINDA ',
            ],
            [
            'project_id' => '1',
            'code_id' => '11',
            'practice_code' => 'bai11.01',
            'activities' => 'Maintain and enforce a standard approach to project management aligned to the enterprise’s specific environment and with good practice based on defined process and use of appropriate technology. Ensure that the approach covers the full life cycle and disciplines to be followed, including the management of scope, resources, risk, cost, quality, time, communication, stakeholder involvement, procurement, change control, integration and benefit realization.',
            'evidence' => '-Prosedur Pengelolaan Proyek Teknologi Informasi
            -PPT Progress Report: Template Alhta '
            ],
            [
            'project_id' => '1',
            'code_id' => '11',
            'practice_code' => 'bai11.01',
            'activities' => 'Maintain and enforce a standard approach to project management aligned to the enterprise’s specific environment and with good practice based on defined process and use of appropriate technology. Ensure that the approach covers the full life cycle and disciplines to be followed, including the management of scope, resources, risk, cost, quality, time, communication, stakeholder involvement, procurement, change control, integration and benefit realization.',
            'evidence' => '-Prosedur Pengelolaan Proyek Teknologi Informasi
            -PPT Progress Report: Template Alhta ',
            ],
            [
            'project_id' => '1',
            'code_id' => '12',
            'practice_code' => 'dss01.1',
            'activities' => 'Develop and maintain operational procedures and related activities to support all delivered services.',
            'evidence' => 'Prosedur Pengelolaan Operasional Sistem Informasi TI, Prosedur Pengelolaan Backup dan Restore, Instruksi Kerja Data Centre Operational'
            ],
            [
            'project_id' => '1',
            'code_id' => '12',
            'practice_code' => 'dss01.1',
            'activities' => 'Develop and maintain operational procedures and related activities to support all delivered services.',
            'evidence' => 'Prosedur Pengelolaan Operasional Sistem Informasi TI, Prosedur Pengelolaan Backup dan Restore, Instruksi Kerja Data Centre Operational',
            ],
            [
            'project_id' => '1',
            'code_id' => '13',
            'practice_code' => 'dss02.1',
            'activities' => 'Log all service requests and incidents, recording all relevant information, so they can be handled effectively and a full historical record can be maintained.',
            'evidence' => 'Prosedur Pengelolaan Service Desk, SLA IT Services',
            ],
            [
            'project_id' => '1',
            'code_id' => '13',
            'practice_code' => 'dss02.1',
            'activities' => 'Log all service requests and incidents, recording all relevant information, so they can be handled effectively and a full historical record can be maintained.',
            'evidence' => 'Prosedur Pengelolaan Service Desk, SLA IT Services',
            ],
            [
            'project_id' => '1',
            'code_id' => '14',
            'practice_code' => 'dss04.1',
            'activities' => 'Identify internal outsourced bussiness process and service activities that are critical to the enterprise operations or necessary to meet legal and/or contractual obligation.',
            'evidence' => 'Prosedur Pengelolaan Keberlangsungan Layanan TI (DRP)',
            ],
            [
            'project_id' => '1',
            'code_id' => '14',
            'practice_code' => 'dss04.1',
            'activities' => 'Identify internal outsourced bussiness process and service activities that are critical to the enterprise operations or necessary to meet legal and/or contractual obligation.',
            'evidence' => 'Prosedur Pengelolaan Keberlangsungan Layanan TI (DRP)',
            ],
            [
            'project_id' => '1',
            'code_id' => '15',
            'practice_code' => 'dss05.1',
            'activities' => 'Install and activate malicious software protection tools on all processing facilities, with malicious software definition files that are updated as required (automatically or semi-automatically).',
            'evidence' => 'Prosedur Keamanan Teknologi Informasi
            Screenshot Kaspersky Endpoint Security',
            ],
            [
            'project_id' => '1',
            'code_id' => '15',
            'practice_code' => 'dss05.1',
            'activities' => 'Install and activate malicious software protection tools on all processing facilities, with malicious software definition files that are updated as required (automatically or semi-automatically).',
            'evidence' => 'Prosedur Keamanan Teknologi Informasi
            Screenshot Kaspersky Endpoint Security',
            ],
            [
            'project_id' => '1',
            'code_id' => '16',
            'practice_code' => 'mea01.1',
            'activities' => 'Identify stakeholders (e.g., management, process owners and users).',
            'evidence' => 'Petunjuk Pelaksanaan Evaluasi KPI Perusahaan dan KPI Unit Kerja PT Pupuk Sriwijaya Palembang',
            ],
            [
            'project_id' => '1',
            'code_id' => '16',
            'practice_code' => 'mea01.1',
            'activities' => 'Identify stakeholders (e.g., management, process owners and users).',
            'evidence' => 'Petunjuk Pelaksanaan Evaluasi KPI Perusahaan dan KPI Unit Kerja PT Pupuk Sriwijaya Palembang',
            ],
            ]);


            DB::table('projects')->insert([
               [
                 'project' => 'project 2024',
               ],
               [
                'project' => 'project 2025',
              ]
            ]);

            
            DB::table('codes')->insert([
                [
                  'code' => 'APO06',
                  'project_id' => '1',
                  'description' => 'Managed Budget and Costs',
                ],
                [
                    'code' => 'APO07',
                    'project_id' => '1',
                    'description' => 'Managed Human Resources',
                ],
                [
                    'code' => 'APO09',
                    'project_id' => '1',
                    'description' => 'Managed Service Agreements',
                ],
                [
                    'code' => 'APO10',
                    'project_id' => '1',
                    'description' => 'Managed Vendors',
                ],
                [
                    'code' => 'BAI02',
                    'project_id' => '1',
                    'description' => 'Managed Requirements Definition',
                ],
                [
                    'code' => 'BAI03',
                    'project_id' => '1',
                    'description' => 'Managed Solutions Identification and Build',
                ],
                [
                    'code' => 'BAI04',
                    'project_id' => '1',
                    'description' => 'Managed Availability and Capacity',
                ],
                [
                    'code' => 'BAI06',
                    'project_id' => '1',
                    'description' => 'Managed IT Changes',
                ],
                [
                    'code' => 'BAI07',
                    'project_id' => '1',
                    'description' => 'Managed IT Change Acceptance and Transitioning',
                ],
                [
                    'code' => 'BAI10',
                    'project_id' => '1',
                    'description' => 'Managed Configuration',
                ],
                [
                    'code' => 'BAI11',
                    'project_id' => '1',
                    'description' => 'Managed Projects',
                ],
                [
                    'code' => 'DSS01',
                    'project_id' => '1',
                    'description' => 'Managed Operations',
                ],
                [
                    'code' => 'DSS02',
                    'project_id' => '1',
                    'description' => 'Managed Service Requests and Incidents',
                ],
                [
                    'code' => 'DSS04',
                    'project_id' => '1',
                    'description' => 'Managed Continuity',
                ],
                [
                    'code' => 'DSS05',
                    'project_id' => '1',
                    'description' => 'Managed Security Services',
                ],
                [
                    'code' => 'MEA01',
                    'project_id' => '1',
                    'description' => 'Managed Performance and Conformance Monitoring',
                ],
                  [
                    'code' => 'APO06',
                    'project_id' => '2',
                    'description' => 'Managed Budget and Costs',
                  ],
                  [
                    'code' => 'APO07',
                    'project_id' => '2',
                    'description' => 'Managed Human Resources',
                  ],
                  [
                    'code' => 'APO09',
                    'project_id' => '2',
                    'description' => 'Managed Service Agreements',
                  ],
                [
                    'code' => 'APO10',
                    'project_id' => '2',
                    'description' => 'Managed Vendors',
                ],
                [
                    'code' => 'BAI02',
                    'project_id' => '2',
                    'description' => 'Managed Requirements Definition',
                ],
                [
                    'code' => 'BAI03',
                    'project_id' => '2',
                    'description' => 'Managed Solutions Identification and Build',
                ],
                [
                    'code' => 'BAI04',
                    'project_id' => '2',
                    'description' => 'Managed Availability and Capacity',
                ],
                [
                    'code' => 'BAI06',
                    'project_id' => '2',
                    'description' => 'Managed IT Changes',
                ],
                [
                    'code' => 'BAI07',
                    'project_id' => '2',
                    'description' => 'Managed IT Change Acceptance and Transitioning',
                ],
                [
                    'code' => 'BAI10',
                    'project_id' => '2',
                    'description' => 'Managed Configuration',
                ],
                [
                    'code' => 'BAI11',
                    'project_id' => '2',
                    'description' => 'Managed Projects',
                ],
                [
                    'code' => 'DSS01',
                    'project_id' => '2',
                    'description' => 'Managed Operations',
                ],
                [
                    'code' => 'DSS02',
                    'project_id' => '2',
                    'description' => 'Managed Service Requests and Incidents',
                ],
                [
                    'code' => 'DSS04',
                    'project_id' => '2',
                    'description' => 'Managed Continuity',
                ],
                [
                    'code' => 'DSS05',
                    'project_id' => '2',
                    'description' => 'Managed Security Services',
                ],
                [
                    'code' => 'MEA01',
                    'project_id' => '2',
                    'description' => 'Managed Performance and Conformance Monitoring',
                ],
             ]);
             
    }

  
}
