<?php
$DNA= "/[^ATCG]/i";
$RNA = "/[^AUCG]/i";
$CHECK_AMINO ="/[^ARNDCEQGHILKMFPSTWYV]/";
$AMINOACIDOS =array(
                    'A' => array(
                                    'GCT',
                                    'GCC',
                                    'GCA',
                                    'GCG'
                    ),
                    'R' => array(
                                    'CGT',
                                    'CGC',
                                    'CGA',
                                    'CGG',
                                    'AGA',
                                    'AGG'
                    ),
                    'N' => array(
                                    'AAT',
                                    'AAC'
                    ),
                    'D' => array(
                                    'GAT',
                                    'GAC'
                    ),
                    'C' => array(
                                    'TGT',
                                    'TGC'
                        
                    ),
                    'E' => array(
                                    'GAA',
                                    'GAG'
                    ),
                    'Q' => array(
                                    'CAA',
                                    'CAG'
                    ),
                    'G' => array(
                                    'GGT',
                                    'GGC',
                                    'GGA',
                                    'GGG'
                    ),
                    'H' => array(
                                    'CAT',
                                    'CAC'
                    ),
                    'I' => array(
                                    'ATT',
                                    'ATC',
                                    'ATA'
                    ),
                    'L' => array(
                                    'CTT',
                                    'CTC',
                                    'CTA',
                                    'CTG',
                                    'TTA',
                                    'TTG'
                    ),
                    'K' => array(
                                    'AAA',
                                    'AAG'
                    ),
                    'M' => array(
                                    'ATG',
                    ),
                    'F' => array(
                                    'TTT',
                                    'TTC'
                    ),
                    'P' => array(
                                    'CTC',
                                    'CCC',
                                    'CCA',
                                    'CCG'
                        
                    ),
                    'S' => array(
                                    'TCT',
                                    'TCC',
                                    'TCA',
                                    'TCG',
                                    'AGT',
                                    'AGC'
                    ),
                    'T' => array(
                                    'ACT',
                                    'ACC',
                                    'ACA',
                                    'ACG'
                        
                    ),
                    'W' => array(
                                    'TGG',
                    ),
                    'Y' => array(
                                    'TAT',
                                    'TAC'
                    ),
                    'V' => array(
                                    'GTT',
                                    'GGC',
                                    'GTA',
                                    'GTG'
                    )
                );

$AMINO_NAMES = array  (
                    'A' => 'Alanine',
                    'R' => 'Arginine',                   
                    'N' => 'Asparagine',                    
                    'D' => 'Aspartic',                    
                    'C' => 'Cysteine',                    
                    'E' => 'Glutamatic Acid',                    
                    'Q' => 'Glutamine',                    
                    'G' => 'Glycine',                   
                    'H' => 'Histidine',                   
                    'I' => 'Isoleucine',                    
                    'L' => 'Leucine',                   
                    'K' => 'Lysine',                  
                    'M' => 'Methionine',                 
                    'F' => 'Phenylalanine',               
                    'P' => 'Proline',                  
                    'S' => 'Serine',                 
                    'T' => 'Threonine',                 
                    'W' => 'Tryptophan',                 
                    'Y' => 'Tyrosine',                
                    'V' => 'Valine'                    
                );
