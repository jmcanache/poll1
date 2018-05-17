<?php

use Illuminate\Database\Seeder;
use App\TableIndicator;
use App\Indicator;

class TableIndicatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$indicator = Indicator::where('position', 2)->first();
    	$data = [
    			['name' => 'The Berlage Post-master in Architecture and Urban Design.', 'university' => 'TU Delft' , 										'country' => 'The Netherlands', 		'official_link' => 'http://www.theberlage.nl/applying/application_11433', 																									'bam_link' => 'http://www.bestarchitecturemasters.com/post-master-in-architecture-and-urban-design-tu-delft', 'position' => '1' ],
    			['name' => 'Master of Architecture', 									'university' => 'National University of Singapore' , 				'country' => 'Singapore', 				'official_link' => 'https://www.arch.nus.edu.sg/programme/architecture/m-arch/m-arch-info.pdf', 																			'bam_link' => 'http://www.bestarchitecturemasters.com/master-of-architecture-nus', 'position' => '2' ],
    			['name' => 'MArch Architecture', 										'university' => 'The Bartlett UCL' , 								'country' => 'United Kingdom', 			'official_link' => 'https://www.ucl.ac.uk/prospective-students/graduate/taught/degrees/architecture-march-arb-riba-2', 														'bam_link' => 'http://www.bestarchitecturemasters.com/march-architecture-ucl', 'position' => '3' ],
    			['name' => 'MArch Architecture and Urbanism', 							'university' => 'AA Architectural Association' , 					'country' => 'United Kingdom', 			'official_link' => 'http://www.aaschool.ac.uk/STUDY/GRADUATE/?name=aadrl', 																									'bam_link' => 'http://www.bestarchitecturemasters.com/march-architecture-and-urbanism-the-aa', 'position' => '4' ],
    			['name' => 'MA in Architecture and Urbanism', 							'university' => 'Manchester School of Architecture' , 				'country' => 'United Kingdom', 			'official_link' => 'http://www.msa.ac.uk/study/ma/architecture-and-urbanism/', 																								'bam_link' => 'http://www.bestarchitecturemasters.com/ma-in-architecture-and-urbanism-msa', 'position' => '5' ],
    			['name' => 'Master in Collective Housing', 								'university' => 'Universidad Politécnica de Madrid / ETH Zurich' , 	'country' => 'Spain / Switzerland', 	'official_link' => 'http://www.mchmaster.com', 																																'bam_link' => 'http://www.bestarchitecturemasters.com/master-in-collective-housing-upm-eth', 'position' => '6' ],
    			['name' => 'Master of Science in Architecture', 						'university' => 'ETH Zurich' , 										'country' => 'Switzerland', 			'official_link' => 'https://www.arch.ethz.ch/en/studium/studienangebot/master-architektur.html', 																			'bam_link' => 'http://www.bestarchitecturemasters.com/master-of-science-in-architecture-eth', 'position' => '7' ],
    			['name' => 'Master of Architecture', 									'university' => 'Tsinghua University' , 							'country' => 'China', 					'official_link' => 'http://www.arch.tsinghua.edu.cn/qhqt/homePage/homePage.html', 																							'bam_link' => 'http://www.bestarchitecturemasters.com/master-in-architecture-tsinghua-university', 'position' => '8' ],
    			['name' => 'Master of Architecture', 									'university' => 'The University of Hong Kong' , 					'country' => 'China', 					'official_link' => 'http://www.arch.hku.hk/programmes/arch/master-of-architecture/+', 																						'bam_link' => 'http://www.bestarchitecturemasters.com/', 'position' => '9' ],
    			['name' => 'MArch Architecture + Urbanism.', 							'university' => 'MIT Massachusetts Institute of Technology' , 		'country' => 'USA', 					'official_link' => 'https://architecture.mit.edu/architecture-and-urbanism/degree/march', 																					'bam_link' => 'http://www.bestarchitecturemasters.com/march-architecture-urbanism-mit', 'position' => '10' ],
    			['name' => 'Master of Architecture', 									'university' => 'University of California Berkeley' , 				'country' => 'USA', 					'official_link' => 'https://ced.berkeley.edu/academics/architecture/programs/master-of-architecture', 																		'bam_link' => 'http://www.bestarchitecturemasters.com/master-of-architecture-berkeley', 'position' => '11' ],
    			['name' => 'Master in Architecture 1 - 2', 								'university' => 'GSD Harvard University' , 							'country' => 'USA', 					'official_link' => 'http://www.gsd.harvard.edu/architecture/master-in-architecture-i/', 																					'bam_link' => 'http://www.bestarchitecturemasters.com/master-in-architecture-1-harvard', 'position' => '12' ],
    			['name' => 'Maestría en Arquitectura', 									'university' => 'Universidad de Los Andes' , 						'country' => 'Colombia', 				'official_link' => 'https://marq.uniandes.edu.co/', 																														'bam_link' => 'http://www.bestarchitecturemasters.com/maestria-en-arquitectura-uniandes', 'position' => '13' ],
    			['name' => 'Maestría en Arquitectura. ', 								'university' => 'Universidad Nacional Autónoma de México' , 		'country' => 'Mexico', 					'official_link' => 'http://www.posgrado.unam.mx/arquitectura/posgrado/maestria/pdfs/convom20171.pdf', 																		'bam_link' => 'http://www.bestarchitecturemasters.com/maestria-en-arquitectura-unam', 'position' => '14' ],
    			['name' => 'Magíster en Arquitectura. ', 								'university' => 'Pontificia Universidad Católica de Chile' , 		'country' => 'Chile', 					'official_link' => 'http://magisterarq.cl/magister-en-arquitectura-marq/', 																									'bam_link' => 'http://www.bestarchitecturemasters.com/magister-en-arquitectura-puc', 'position' => '15' ],
    			['name' => 'Master’s Degree in Architectural Design', 					'university' => 'Roma TRE' , 										'country' => 'Italy', 					'official_link' => 'http://architettura.uniroma3.it/en/?page_id=62', 																										'bam_link' => 'http://www.bestarchitecturemasters.com/masters-degree-in-architectural-des-roma-tre', 'position' => '16' ],
    			['name' => 'Master Architecture and Urban Design', 						'university' => 'Politécnico de Milano' , 							'country' => 'Italy', 					'official_link' => 'http://www.polinternational.polimi.it/educational-offer/laurea-magistrale-equivalent-to-master-of-science-programmes/architecture-and-urban-design/', 	'bam_link' => 'http://www.bestarchitecturemasters.com/master-degree-in-architectural-design-politecnico-di-milano', 'position' => '17' ],
    			['name' => 'Maestrado Projeto de Arquitetura', 							'university' => 'Universidade de São Paulo ' , 						'country' => 'Brazil', 					'official_link' => 'http://www.fau.usp.br/area-concentracao/projeto-de-arquitetura/', 																						'bam_link' => 'http://www.bestarchitecturemasters.com/maestrado-projeto-de-arquitetura-usp', 'position' => '18' ],
    			['name' => 'Master of Architecture', 									'university' => 'The University of Sydney' , 						'country' => 'Australia', 				'official_link' => 'https://sydney.edu.au/courses/courses/pc/master-of-architecture.html', 																					'bam_link' => 'http://www.bestarchitecturemasters.com/master-of-architecture-sydney', 'position' => '19' ],
    			['name' => 'Master of Architecture', 									'university' => 'Columbia University' , 							'country' => 'USA', 					'official_link' => 'https://www.arch.columbia.edu/programs/1-master-of-architecture', 																						'bam_link' => 'http://www.bestarchitecturemasters.com/master-of-architecture-columbia', 'position' => '20' ],
    	];

    	foreach ($data as $row) {
    		TableIndicator::create([
    			'indicator_id' 	=> $indicator->id,
    			'name' 			=> $row['name'],
    			'university' 	=> $row['university'],
    			'country' 		=> $row['country'],
    			'official_link' => $row['official_link'],
    			'bam_link' 		=> $row['bam_link'],
                'position'      => $row['position']
    		]);
    	}
    }
}
